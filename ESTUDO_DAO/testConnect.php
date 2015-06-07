<?php 
@require("PDOConnectionFactory.php");

try{
	$pdo = new PDOConnectionFactory();
	$pdo->getConnection();
	//estou conectado
	echo "sucesso";
	$pdo = null;

}
	catch(PDOException $ex){echo $ex->getMessage();}
	echo "teste";
?>