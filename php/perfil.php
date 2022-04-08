<?php
	include "conexao.php";

$nome = $_POST["nome"];
$snome = $_POST["snome"];
$sexo = $_POST["sexo"];
$cpf = $_POST["cpf"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];

	$sql->query("insert into perfil(nome_perfil, sobrenome_perfil, sexo_perfil, cpf_perfil, email_perfil, tel_perfil, cidade_perfil, estado_perfil)
values('$nome', '$snome', '$sexo', '$cpf', '$email', '$telefone', '$cidade', '$estado')");

	header("Location:../index.html");
 	
	


?>