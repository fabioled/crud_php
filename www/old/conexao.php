<?php 
	
	if(isset($_POST["acao"])) {
		if($_POST["acao"] == "cadastrar") {
			cadastrarPessoa();
		}
	}


	function abrirBanco(){
		$conexao =  new mysqli("localhost", "root", "test", "crud");
		return $conexao;
	}

	function cadastrarPessoa(){
		$banco = abrirBanco();
		
		$sql = " INSERT INTO pessoas (id, nome) 
		         VALUES ('{$_POST["id"]}', '{$_POST["nome"]}') " ;
		$banco->query($sql);
		$banco->close();		
	}

	function selectAllPessoa(){
		$banco = abrirBanco();
		$sql = "SELECT * FROM pessoa ORDER BY nome";
		$resultado = $banco->query($sql);
		while ($row = mysqli_fetch_array($resultado)) {
			$grupo[] = $row;
		}
		return $grupo;
	}


 ?>