<?php
    include "conexao.php";/*aqui é onde conecta o arquivo com os dados da conexão o arquivo conect.php */

$nome = $_POST['nome_perfil'];
$snome = $_POST['sobrenome_perfil'];
$sexo = $_POST['sexo_perfil'];
$cpf = $_POST['cpf_perfil'];
$email = $_POST['email_perfil'];
$telefone = $_POST['tel_perfil'];
$cidade = $_POST['cidade_perfil'];
$estado = $_POST['estado_perfil'];
		        


$sql -> query("UPDATE perfil SET nome_perfil='$nome', sobrenome_perfil='$snome', sexo_perfil='$sexo', cpf_perfil='$cpf', email_perfil='$email', tel_perfil='$telefone', cidade_perfil='$cidade', estado_perfil='$estado' where cpf_perfil=$cpf ");

        header('Location: listarperfil.php');
    
    ?>
	
	