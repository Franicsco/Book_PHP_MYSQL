<?php 
if(@ $_COOKIE['visita'] == ""){
	
	$visita = 1;
	setcookie("visita", $visita, time() + 30);
}
else{
	$_COOKIE['visita']++;
	$visita = $_COOKIE['visita'];
	setcookie("visita", $visita, time() + 30);
}

echo $visita;
?>
