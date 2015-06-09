<?php 

$valor = 12345.678;

$var1 = number_format($valor, 1);
$var2 = number_format($valor, 2, ',','.');

echo ($valor . '<br />');
echo ($var1 . '<br />');
echo ($var2 . '<br />');
?>