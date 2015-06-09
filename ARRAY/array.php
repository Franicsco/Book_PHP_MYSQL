<?php

$meuArray = array('alpha'=>'valor1', 2, 'tres');

echo($meuArray['alpha'] . "<br /><br />");

//===================//

$novoArray = array('ola'=>'tudo bem', 2 , 'quatro', 'seis');
$novoArray[5] = "cinco";

print_r($novoArray);
echo("<br /><br />");

//====================//

$listaArray = array('a', 'b', 'c', 'd', 'e', 'f');

foreach ($listaArray as $valor) {
	if($valor == "a"){
		echo($listaArray[5]);
		
	}
	echo($valor . " ==== ");
}

?>