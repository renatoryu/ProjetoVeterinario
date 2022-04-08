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
<a href="listarpet.php" class="hvr-sweep-to-left">Voltar</a> 
	<div id="cd1"></div><br> 
        
        <style>
    h3{
        color:black;
		font-size: 20pt;
    }
	
	p{
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
    
    <?php
    
$cod = $_GET["cod_pet"];
include "conexao.php";

$dados = mysqli_query($sql, "SELECT * FROM pet WHERE cod_pet = '$cod' ");
while ($coluna = mysqli_fetch_array($dados))
{
	
        
        $nome = $coluna['nome_pet'];
        $tipo = $coluna['tipo_pet'];
        $sexo = $coluna['sexo_pet'];
        $idade = $coluna['idade_pet'];
        $raca = $coluna['raca_pet'];
        $porte = $coluna['porte_pet'];
        $castrado = $coluna['cast_pet'];
        $dono = $coluna['dono_pet'];
     
		  
}   
?>
    <form action='salvarpet.php?cod_pet=$cod' name='form' method='post'>
        
        
    
       <fieldtest id='cadastro'>
           <h3>Alteraçao de Cadastro</h3>
           
           <input type='hidden' name='cod_pet' value='<?php echo "$cod"; ?>'>
           
       <p>
           <label for='nome'>Nome:</label>   
           <input type='text' id='nome_pet' name='nome_pet' value='<?php echo "$nome"; ?>'>
       </p>
       <p>
           <label for='tipo'>Tipo:</label>   
           <input type='text' id='tipo_pet' name='tipo_pet' value='<?php echo "$tipo"; ?>'>
       </p>
           
       <p>
            <label for="sexo">Gênero:</label>
            <input type="radio" name="sexo_pet" value="Masculino">Masculino
            <input type="radio" name="sexo_pet" value="Feminino">Feminino
        <p/> 
                                                                                              
        <p>
            <label for="idade">Idade:</label>
           <input type='text' id='idade_pet' name='idade_pet' value='<?php echo "$idade"; ?>'>
           
      <p/>                                                                                 
                                                                                             
       
             
       <p>
           <label for='raca'>Raça:</label>   
           <input type='text' id='raca_pet' name='raca_pet' value='<?php echo "$raca"; ?>'>
       </p>
	   
	   <p>
           <label for='porte'>Porte:</label>   
           <input type='text' id='porte_pet' name='porte_pet' value='<?php echo "$porte"; ?>'>
       </p>
	   <p>
              
                <label for="estado">Castrado</label>
                <select name="cast_pet" id="cast_pet" value='<?php echo "$castrado"; ?> '>
                    <option value="">--</option>
                    <option value="Sim">Sim</option>
                    <option value="Não">Não</option>
           
           
           </select>
           
                                                                                     
	   <p>
                                                                                    
           <label for='dono'>Dono:</label>   
           <input type='text' id='dono_pet' name='dono_pet' value='<?php echo "$dono"; ?>'>
       </p>
	 
	   
	   
	   <br>
             <button>Salvar</button> 
    </form>
</fieldset>
</body>
</html>