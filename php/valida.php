<?php
session_start();
include_once("conexao.php");
//Verifica se o botão acessar foi clicado

$acessar - filter_input(INPUT_POST, 'acessar', FILTER_SANITIZE_STRING);
if ($acessar){
    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

    if((!empty($usuario)) AND (!empty($senha))) {

    //Pesquisar o usuario e a senha no banco
    $result_usuario = "SELECT * FROM usuarios where usuario = '$usuario' LIMIT 1";

    //verificar as variáveis no banco
    $resultado_usuario = mysqli_query($sql, $result_usuario);

    //se foi encontrado algum dado igual
    if ($resultado_usuario) {

        $row_usuario = mysqli_fetch_assoc($resultado_usuario);
        //descriptografa a senha pra poder comparar
        if (password_verify ($senha, $row_usuario['senha'])){
            $_SESSION['id'] = $row_usuario['id'];
            $_SESSION['nome'] = $row_usuario['nome'];
            $_SESSION['email'] = $row_usuario['email'];
            echo "Ok você chegou até aqui";
            header("Location:../inicio.html");
        }else {
            $_SESSION['msg'] = "<texto>Login e senha incorreto!</text>";
            header("Location: ../index.php");
        }
    }

    }else {
        $_SESSION['msg']="<texto>Login e senha incorreto!</text>";
        header ("Location:../index.php");
    }
}else {
    $_SESSION['msg']="<texto>Página não encontrada!</text>";
    header ("Location:../index.php");
}

?>