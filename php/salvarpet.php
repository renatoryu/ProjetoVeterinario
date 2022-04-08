<?php
    include "conexao.php";/*aqui é onde conecta o arquivo com os dados da conexão o arquivo conect.php */

$cod = $_POST['cod_pet'];
$nome = $_POST['nome_pet'];
$tipo = $_POST['tipo_pet'];
$sexo = $_POST['sexo_pet'];
$idade = $_POST['idade_pet'];
$raca = $_POST['raca_pet'];
$porte = $_POST['porte_pet'];
$castrado = $_POST['cast_pet'];
$dono = $_POST['dono_pet'];
                

$sql -> query("UPDATE pet SET nome_pet='$nome', tipo_pet='$tipo', sexo_pet='$sexo', idade_pet='$idade', raca_pet='$raca', porte_pet='$porte', cast_pet='$castrado', dono_pet='$dono' where cod_pet=$cod ");

        header('Location: listarpet.php');
    
    ?>
	
	