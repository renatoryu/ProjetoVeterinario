<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Renato's Vet </title>
    <link rel="stylesheet" href="" type="type/css">

</head>
<div class="div-form">
    <h1>Formulário de Login</h1>
    <h2 class="text-center">Área Restrita</h2>
    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

    if (isset($_SESSION['msgcad'])) {
        echo $_SESSION['msgcad'];
        unset($_SESSION['msgcad']);
    }
    ?>

    <form type="text" action="php/valida.php" method="post">
        <fieldset>
            <p><label for="usuario">Usuário:</label></p>
            <input type="text" name="usuario" placeholder="Digite o seu usuário" size="30">

            <p><label for="senha">Senha:</label></p>
            <input type="password" name="senha" placeholder="Digite a sua senha" size="30">

            <input type="submit" name="acessar" value="Acessar">
            <h4>Você ainda não possui cadastro?</h4>
            <a href="php/cadastro.php">Clique aqui e crie uma conta</a>
        </fieldset>
    </form>

</div>
</body>

</html>