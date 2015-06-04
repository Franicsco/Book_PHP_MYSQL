<?php 
session_start();
echo "Bem vindo " . $_SESSION["usuario"]. "<br /> <a href='sessao01.php'>Voltar</a>";
?>