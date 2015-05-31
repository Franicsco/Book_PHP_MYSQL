<?php
//Escrevendo em um arquivo txt

$file = fopen('dados.txt', 'w');
fwrite($file, 'Escrevendo teste t222este///////');
fwrite($file, ' no arquivo. Teste22 teste 22222 ');
fclose($file);

//Lendo o arquivo txt
$filepath = "dados.txt";
$file = fopen($filepath, 'r');
$buffer = fread($file, filesize($filepath));
fclose($file);
echo($buffer);
?>