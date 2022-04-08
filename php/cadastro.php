<?php
    session_start();
    ob_start();
    include_once("conexao.php");

    //Verifica se o botão foi selecionado
    $btnCadUsuario = filter_input(INPUT_POST,'btnCadUsuario', FILTER_SANITIZE_STRING);
    if($btnCadUsuario) {
      
        $dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        $erro = false;

        $dados_st = array_map('strip_tags', $dados_rc);
        $dados = array_map('trim',$dados_st);

        if(in_array('',$dados)){
            $erro = true;
            $_SESSION['msg'] = "Necessário preencher todos os campos!";

        }elseif((strlen($dados["senha"]))<6){
            $erro = true;
            $_SESSION['msg']="A senha deve ter no mínimo 6 caracteres"; 

        }elseif (strstr($dados['senha'], "&")){
            $erro = true;
            $_SESSION['msg'] = "Caracter (&) utilizado na senha não é permitido";

        }else{
            $result_usuario="select id from usuarios where usuario='".$dados['usuario']."'";
            $resultado_usuario = mysqli_query($sql,$result_usuario);

            if (($resultado_usuario) AND ($resultado_usuario->num_rows != 0)) {
                $erro = true;
                $_SESSION['msg']="Este usuário já está cadastrado";
            }   
            $result_usuario="select id from usuarios where email='".$dados['email']."'";
            $resultado_usuario = mysqli_query($sql,$result_usuario);

            if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)) {
                $erro = true;
                $_SESSION['msg']="Este email já está sendo utilizado";
            }
        }
       
    if(!$erro){
        $dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);
        $result_usuario = "insert into usuarios(nome, email, usuario, senha)values('".$dados['nome']."','".$dados['email']."','".$dados['usuario']."','".$dados['senha']."')";

        $resultado_usuario = mysqli_query($sql, $result_usuario); 
        if(mysqli_insert_id($sql)){
            $_SESSION['msgcad'] = "Usuário cadastrado com sucesso";

            header("Location:../index.php");
        }else{
            $_SESSION['msg'] = "Erro ao cadastrar o usuário";
             }
        }
    }
?>

<!doctype html>
<html lang="pt-br">
<head>
<meta charset = "UTF-8" />

<title>
Renato's Vet

</title>

<link rel="stylesheet" href="css/estilo1.css" type="text/css">
</head>
<BODY> 

<div class="container">
    <div class="form-signin" style="background:#42dea4;"
    <h2>Cadastro de Usuário</h2>
      
        <form type="text" method="post" action="">

        <br><input type="text" name="nome" placeholder="Digite o nome e o sobrenome:" class="cadastro"><br></br>

        <input type="email" name="email" placeholder="Digite o email (usuario@provedor.com):" class="cadastro"><br></br>

        <input type="text" name="usuario" placeholder="Digite o usuário:" class="cadastro"><br></br>

        <input type="password" name="senha" placeholder="Digite a senha:" class="cadastro"><br></br>

        <?php
        if (isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset ($_SESSION['msg']);
        }

        ?>
        <br><br><input type="submit" name="btnCadUsuario" Value="Cadastrar" class="button"><br>

        <div class ="row text-center" style="margin-top: 20px">

        Lembrou a conta?<a href="../index.php"> Clique aqui </a> para logar

    </div>
</div>
        </form>
</div>
</body>
</html>