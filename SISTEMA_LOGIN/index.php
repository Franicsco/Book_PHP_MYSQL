<!DOCTYPE HTML>
<html lang="pt-br">
  
  <head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
    
    <!--Importando a Biblioteca JQuery-->
    <script type="text/javascript" src="jquery/jquery.min.js"></script>
      
    <!--Importando a Biblioteca JQuery-->
    <script type="text/javascript" src="js/validacao.js"></script>
      
  <title>Acesse sua conta</title>
  </head>
  
  <body>
    <div id="conteudo">
      <!--MENU-->
      <div id="opcao">      		
           <div class="menuAcesse">
           	   <a href="##">               
               		<div class="menuTexto">ACESSE</div>
               </a>
           </div>
          	
           <div class="menuCadastro">  
           	   <a href="##">                    
               		<div class="menuTexto">CADASTRE-SE</div>                    
               </a>
           </div>          	
      </div>     
       <!--MENU-->
       
       <!--ESCOLHA DO MENU-->
       <div id="escolhaFormAcesse">
       		<div class="formAcesse">
            	<h1>Acesse sua conta</h1>
                <form action="logado" method="post">
                    <input type="email" value="" placeholder="E-mail:" autofocus /><br />
                    <input type="password" value="" placeholder="Senha:" /><br />
                    <input type="submit" value="Acessar" class="btAcessar"/>
                </form>
            </div>
       </div>
       
       <div id="escolhaFormCadastrese">
       </div>
       </div>
       <!--ESCOLHA DO MENU-->
       
    </div>
  </body>
  </html>