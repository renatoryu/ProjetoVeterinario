
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
$query = mysqli_query($sql,"select * from pet");
?>
<center>
<h3>Listagem de Animais</h3>
<table border="1">
<tr id=table >
<td align="center">Código</td>
<td align="center">Nome</td>
<td align="center">Tipo</td>
<td align="center">Gênero</td>
<td align="center">Idade</td>
<td align="center">Raça</td>
<td align="center">Porte</td>
<td align="center">Castrado</td>
<td align="center">Dono</td>
<td align="center" colspan="2">Ação</td>

<style>
    h3{
        color:black;
		font-size: 20pt;
    }
	
	table{
		color:black;
		font-size: 13pt;
	}
	 body{
    background-image: url('../img/bg3.jpg');
    background-attachment: fixed;
    background-size: cover;
	background-repeat: no-repeat;
  
}
</style>

</tr>
<?php
	while($row = mysqli_fetch_array($query)){
		
	$cod = $row['cod_pet'];
	$nome = $row['nome_pet'];
	$tipo = $row['tipo_pet'];
	$sexo = $row['sexo_pet'];
	$idade = $row['idade_pet'];
	$raca = $row['raca_pet'];
	$porte = $row['porte_pet'];
	$castrado = $row['cast_pet'];
	$dono = $row['dono_pet'];
	
	echo"
	<tr>
	<td>$cod</td>
	<td>$nome</td>
	<td>$tipo</td>
	<td>$sexo</td>
	<td>$idade</td>
	<td>$raca</td>
	<td>$porte</td>
	<td>$castrado</td>
	<td>$dono</td>
	<td><a href=\"alterarpet.php?cod_pet=$cod\">[Alterar]</a></td>
	<td><a href=\"deletepet.php?cod_pet=$cod\">[Excluir]</a></td>
	</td>";
	
	}
?>
</table>
</center>
</body>
</html>