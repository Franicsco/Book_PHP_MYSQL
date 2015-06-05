<!DOCTYPE HTML>
<html lang="pt-br">
  
  <head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
    
    <!--Importando a Biblioteca JQuery-->
    <script type="text/javascript" src="jquery/jquery.min.js"></script>
      
    <!--Importando a Biblioteca JQuery-->
    <script type="text/javascript" src="js/validacao.js"></script>
      
  <title>Fomulário</title>
  </head>
  
  <body>
    <div id="conteudo">
      
      <div class="formulario">
        <h1>Bem vindo</h1>
        <h2>Preencha todos os campos</h2>
        <div class="form">
          <form action="recebe.php" method="post">
            <input type="text" name="txtNome" id="nome" values="" placeholder="Nome:" autofocus/><br />
            <input type="number" name="txtIdade" id="idade" values="" placeholder="Idade:"/><br />
            <input type="email" name="txtEmail" id="email" values="" placeholder="Email:"/><br />
            <input type="submit" class="botao" value="Enviar" /><br />
          </form> 	
          </div>
       </div>
       
    </div>
  </body>
  </html>