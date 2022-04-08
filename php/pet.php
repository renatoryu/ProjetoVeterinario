<?php
	include "conexao.php";

$nome = $_POST["nome"];
$tipo = $_POST["tipo"];
$sexo = $_POST["sexo"];
$idade = $_POST["idade"];
$raca = $_POST["raca"];
$porte = $_POST["porte"];
$castrado = $_POST["castrado"];
$dono = $_POST["dono"];

	$sql->query("insert into pet(cod_pet, nome_pet,	tipo_pet, sexo_pet,	idade_pet, raca_pet, porte_pet, cast_pet, dono_pet )
values(null, '$nome', '$tipo', '$sexo', '$idade', '$raca', '$porte', '$castrado', '$dono')");

	header("Location:../index.html");

?>