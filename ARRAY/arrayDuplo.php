<?php 

//Array Multidimencional
$meuArray = array(
	'Guitarra' => array('Marca'=>' Gibson ', 'Valor'=>' R$ 3.000,00 '),
	'Bateria' => array('Marca'=>' TAMA ', 'Valor'=>' R$ 8.000,00 '),
	'Baixo' => array('Marca'=>' Jackson ', 'Valor'=>' R$ 1.800,00 ')
	);

foreach ($meuArray as $vetor) {

	//verifico se a variavel $vetor é um array
	if(is_array($vetor))
	{
		//crio um laço para pecorrer o array.
		foreach ($vetor as $outroVetor) {
			//imprimo o array
			echo $outroVetor."<br />";
		}
		
	}
	
}

$quantidade = count($meuArray);
echo "<br />Quantidade de elementos dentro de um ARRAY: <strong>" . $quantidade. "</strong>";
//echo($meuArray['Guitarra']['Marca'].": ");
//echo($meuArray['Guitarra']['Valor']);

?>