<?php

class conexao {
	
	public $servidor = 'localhost';
	public $usuario  = 'root';
	public $senha    = '';
	public $banco    = 'ensino';
	public $porta    = '3306';
	public $conexao;
		
	function conectar() {
		
			# Sem Porta
			$conexao = mysqli_connect(
			$this->servidor,
			$this->usuario,
			$this->senha,
			$this->banco )
			or die('Falha de conexão!');
						
			# Com Porta
			# $conexao = mysqli_connect($this->servidor,
			# $this->usuario,
			# $this->senha,
			# $this->banco,
			# $this->porta)
			# or die('Falha de conexão!');
			
			echo "Conexão foi realizada com sucesso!";
			return $conexao;
		}

		
}


?>
