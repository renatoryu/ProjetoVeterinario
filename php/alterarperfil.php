<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


<link rel="stylesheet" type="text/css" href="../css/but2.css"/>
<link rel="stylesheet" type="text/css" href="../css/but1.css"/>
  
</head>
<body>
        
    <body id="cad1">
<a href="listarperfil.php" class="hvr-sweep-to-left">Voltar</a> 
	<div id="cd1"></div><br> 

        <style>
    h3{
        color:white;
		font-size: 20pt;
        
    }
	
	p{
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
    
    <?php
        
$cpf = $_GET["cpf_perfil"];
include "conexao.php";

$dados = mysqli_query($sql, "SELECT * FROM perfil WHERE cpf_perfil = '$cpf' ");
while ($coluna = mysqli_fetch_array($dados))
{
	
	    
	    $nome= $coluna['nome_perfil'];
        $snome = $coluna['sobrenome_perfil'];
        $sexo = $coluna['sexo_perfil'];
		$cpf= $coluna['cpf_perfil'];
        $email = $coluna['email_perfil'];
       	$telefone = $coluna['tel_perfil'];
        $cidade = $coluna['cidade_perfil'];
		$estado = $coluna['estado_perfil'];
           
		  
}   
?>
    <form action='salvarperfil.php?cpf_perfil=$cpf' name='form' method='post'>
    
       <fieldtest id='cadastro'>
           <h3>Alteraçao de Cadastro</h3>
           
           
                      
       <p>
           <label for='nome'>Nome:</label>   
           <input type='text' id='nome_perfil' name='nome_perfil' value='<?php echo "$nome"; ?>'>
       </p>
       <p>
           <label for='sobrenome'>Sobrenome:</label>   
           <input type='text' id='sobrenome_perfil' name='sobrenome_perfil' value='<?php echo "$snome"; ?>'>
       </p>
                                                                                                    
        <p>
            <label for="sexo">Sexo:</label>
            <input type="radio" name="sexo_perfil" value="Masculino">Masculino
            <input type="radio" name="sexo_perfil" value="Feminino">Feminino
        <p/>                                                                     
             
       <p>
           <label for='cpf'>CPF:</label>   
           <input type='text' id='cpf_perfil' name='cpf_perfil' value='<?php echo "$cpf"; ?>'>
       </p>
	   
	   <p>
           <label for='email'>E-mail:</label>   
           <input type='email' id='email_perfil' name='email_perfil' value='<?php echo "$email"; ?>'>
       </p>                                                                                                                
                                                                                     
	   <p>
                                                                                    
           <label for='telefone'>Telefone:</label>   
           <input type='text' id='tel_perfil' name='tel_perfil' value='<?php echo "$telefone"; ?>'>
       </p>
	   <p>
           <label for='cidade'>Cidade:</label>   
           <input type='text' id='cidade_perfil' name='cidade_perfil' value='<?php echo "$cidade"; ?>'>
       </p>
	   <p>
           <label for='estado'>Estado:</label>   
           <select name="estado_perfil" id="estado_perfil' value='<?php echo "$estado"; ?> ">
                    <option value="">--</option>
                    <option value="PR">PR</option>
                    <option value="SP">SP</option>
                    <option value="RJ">RJ</option>
                    <option value="BA">BA</option>
                    <option value="MG">MG</option>
                    
                </select>
           
       </p>

	   	   
	   <br>
             <button>Salvar</button> 
    </form>
</fieldset>
</body>
</html>