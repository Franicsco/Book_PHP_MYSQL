<?php
require 'usuario.php';

// criando as variaveis e recebendo os dados do formulário
@$nome = $_POST['txtNome'];
@$idade = (int) $_POST['txtIdade'];
@$email = $_POST['txtEmail'];

   if(@!trim($nome) == ""){
        
        if(@!trim($idade) == ""){
          
              if(@!trim($email) == ""){
                
                $obj = new Pessoa($nome, $idade, $email);
                
              }else{
                echo "<script>alert('O Campo E-mail o preenchimento é obrigatório'); location.href = 'index.php';</script>";    
                   }
        }else{
            echo "<script>alert('O Campo IDADE o preenchimento é obrigatório'); location.href = 'index.php';</script>";    
            } 
   }else{
            echo "<script>alert('O Campo NOME o preenchimento é obrigatório'); location.href = 'index.php';</script>";    
        }
    
?>

<!DOCTYPE HTML>
<html lang="pt-br">
  
  <head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/recebe.css">
  <title>Fomulário</title>
  </head>
  
  <body>
    <div id="conteudo">
      
      <div class="formulario">
        <h1>Bem vindo</h1>
        <h2><?php echo $obj->getNome(); ?></h2>
        <h3><strong>Sua idade: </strong><?php echo $obj->getIdade(); ?></h3>
        <h3><strong>Seu e-mail: </strong><?php echo $obj->getEmail(); ?></h3>
        
        <form action="index.php">
            <input type="submit" class="botao" value="Sair" /><br />
          </form> 
       </div>
       
    </div>
  </body>
  </html>