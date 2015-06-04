<?php
	
	header("Content-type: text/html; charset=utf-8"); 
	session_start(); 
	if(@isset($_SESSION["usuario"]) || @ $_SESSION["usuario"] == true){
	
		echo "Bem vindo <strong>" . $_SESSION["usuario"]. "</strong><br /> <a href='sessao01.php'>sair</a>";
		session_unset();	
	}
	else{
		echo "<script>alert('Pagina não disponível'); location.href = 'sessao01.php';</script>";
	}
	
?>