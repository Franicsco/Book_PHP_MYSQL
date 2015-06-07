<?php 
include('escolhaMenu.php');
?>

<!DOCTYPE HTML>
<html lang="pt-br">
  
  <head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
    
    <!--Importando a Biblioteca JQuery-->
    <script type="text/javascript" src="jquery/jquery.min.js"></script>
      
    <!--Importando a Biblioteca JQuery-->
    <script type="text/javascript" src="js/validacaoAcessar.js"></script>
    <script type="text/javascript" src="js/validacaoCadastrar.js"></script>
      
  <title>Acesse sua conta</title>
  </head>
  
  <body>
    <div id="conteudo">
      <!--MENU-->
      <div id="opcao">      		
           <div class="menuAcesse">
           	   <a href="index.php?acesse=acessar">               
               		<div class="menuTexto">ACESSE</div>
               </a>
           </div>
          	
           <div class="menuCadastro">  
           	   <a href="index.php?acesse=cadastrar">                    
               		<div class="menuTexto">CADASTRE-SE</div>                    
               </a>
           </div>          	
      </div>     
       <!--MENU-->
       
       <!--ESCOLHA DO MENU-->
       <?php echo menu();?>
       <!--ESCOLHA DO MENU-->
       
    </div>
  </body>
  </html>