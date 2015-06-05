<?php 
//criando uma classe
class Pessoa{
	
	//Criando as variaveis
	public $nome;
	public $idade;
	public $email;
	
	//crio o metodo construtor com 3 parametros
	function __construct($no, $ida, $em){
		$this->nome = $no;
		$this->idade = $ida;
		$this->email = $em;
	}
	
	//crio uma funcao de notificar
	public function notificar($msg){
		echo "<strong>NOTIFICANDO:</strong> " . $this->nome . ", " . $msg;
	}

}

$obj = new Pessoa("Francisco", 25, "francisco.sts@hotmail.com");
$obj->notificar("seu pedido foi confirmado.");
?>