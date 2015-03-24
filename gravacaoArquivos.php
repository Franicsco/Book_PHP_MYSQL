<?php
//Escrevendo em um arquivo txt

$file = fopen('dados.txt', 'w');
fwrite($file, 'Escrevendo ');
fwrite($file, ' no arquivo');
fclose($file);

//Lendo o arquivo txt
$filepath = "dados.txt";
$file = fopen($filepath, 'r');
$buffer = fread($file, filesize($filepath));
fclose($file);
echo($buffer);
?>