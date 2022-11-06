<?php 

class conectar{
	private $servidor = "localhost:3308";
	private $usuario = "root";
	private $senha = "1234";
	private $bd = "cadastro";

	public function conexao(){
		$conexao = mysqli_connect($this->servidor, $this->usuario, $this->senha, $this->bd);

		return $conexao;
	}
}

 ?>