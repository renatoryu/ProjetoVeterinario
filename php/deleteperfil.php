<?php
include"conexao.php"; 

$cpf = $_GET["cpf_perfil"];
        mysqli_query($sql, "DELETE FROM perfil WHERE cpf_perfil = '$cpf'");


header("Location: listarperfil.php");
?>