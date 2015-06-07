<?php 

class PDOConnectionFactory{

	//recebe a conexão
	public $con = null;
	//qual banco de dados?
	public $dbType = "mysql";

	//parametros de conexao
	public $host = "127.0.0.1";
	public $user = "root";
	public $senha = "";
	public $db = "testeDAO";

	//seta a persistencia da conexao
	public $persistencia = false;

	// new PDOConnectionFactory(true) <--- conexao persistente
	// new PDOConnectionFactory() <--- conexao nao persistente
	public function PDOConnectionFactory($persistente=false){
		//verifico a `persitencia da conexao
		if($persistente != false){$this->persitencia = true;}

	}

	public function getConnection(){
		try{
				//realiza a conexao
				this->con = new PDO($this->dbType.":host=".$this->host.";dbname=".$this->db, $this->user, $this->senha,
					array(PDO::ATTR_PERSISTENT => $this->persistencia));
					//realizado com sucesso, retorna conectado
					return $this->con;

		//caso ocorra um erro, retorna o erro;			
		}catch(PDOException $ex){echo "Erro: ".$ex->getMessage();}
	}

	//desconecta
	public function Close(){
		if($this->con != null){
			$this->$con = null;
		}
	}

}
?>