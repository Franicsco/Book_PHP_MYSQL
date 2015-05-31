<?php
//Escrevendo em um arquivo txt

$file = fopen('dados.txt', 'w');
fwrite($file, 'Estudando cada vez mais');
fwrite($file, ' Estudando cada vez mais ');
fclose($file);

//Lendo o arquivo txt
$filepath = "dados.txt";
$file = fopen($filepath, 'r');
$buffer = fread($file, filesize($filepath));
fclose($file);
echo($buffer);
?>