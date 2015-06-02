<?php
//Escrevendo em um arquivo txt

$file = fopen('dados2.txt', 'w');
fwrite($file, 'Escrevendo '.chr(10));
fwrite($file, ' no arquivo');
fwrite($file, ' txt.');
fclose($file);

//Lendo o arquivo txt linha por linha
$arquivo = file('dados2.txt');
for($i = 0; $i < count($arquivo); $i++){

    
    echo $arquivo[$i]."<br />";
}
?>