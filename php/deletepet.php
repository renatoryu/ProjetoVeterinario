<?php
include"conexao.php"; 

$cod = $_GET["cod_pet"];
        mysqli_query($sql, "DELETE FROM pet WHERE cod_pet = '$cod' ");


header("Location: listarpet.php");
?>