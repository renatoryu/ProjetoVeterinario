
<!doctype html>
<html lang="pt-br">
<head>
<meta charset="UTF-8" />
<title>
Renato's Vet
</title>
<link rel="stylesheet" type="text/css" href="../css/style2.css"/>
<link rel="stylesheet" type="text/css" href="../css/but2.css"/>
<link rel="stylesheet" type="text/css" href="../css/but1.css"/>
<link rel="stylesheet" href="../css/style.css" type="text/css">
</head>

<body id="cad1">
<a href="../index.html" class="hvr-sweep-to-left">Voltar</a> 
	<div id="cd1"></div> 

<?php
include "conexao.php";
$query = mysqli_query($sql,"select * from perfil");
?>
<center>
<h3>Listagem de Perfis</h3>
<table border="1">
<tr id=table >
<td align="center">Nome</td>
<td align="center">Sobrenome</td>
<td align="center">Sexo</td>
<td align="center">CPF</td>
<td align="center">Email</td>
<td align="center">Telefone</td>
<td align="center">Cidade</td>
<td align="center">Estado</td>
<td align="center" colspan="2">Ação</td>

<style>
    h3{
        color:white;
		font-size: 20pt;
    }
	
	table{
		color:white;
		font-size: 13pt;
		
		
	}
	
	 body{
    background-image: url('../img/bg2.jpg');
    background-attachment: fixed;
    background-size: cover;
	background-repeat: no-repeat;
	align: center;
  
}
</style>

</tr>
<?php
	while($row = mysqli_fetch_array($query)){
		
	$nome = $row['nome_perfil'];
	$snome = $row['sobrenome_perfil'];
	$sexo = $row['sexo_perfil'];
	$cpf = $row['cpf_perfil'];
	$email = $row['email_perfil'];
	$telefone  = $row['tel_perfil'];
	$cidade = $row['cidade_perfil'];
	$estado = $row['estado_perfil'];
	
	
	echo"
	<tr>
	<td>$nome</td>
	<td>$snome</td>
	<td>$sexo</td>
	<td>$cpf</td>
	<td>$email</td>
	<td>$telefone</td>
	<td>$cidade</td>
	<td>$estado</td>
	<td><a href=\"alterarperfil.php?cpf_perfil=$cpf\">[Editar]</a></td>
	<td><a href=\"deleteperfil.php?cpf_perfil=$cpf\">[Excluir]</a></td>
	</td>";
	
	}
?>
</table>
</center>
</body>
</html>