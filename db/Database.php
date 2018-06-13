<?php
Class Database
{
	private $_host, $_database, $_user, $_password;

	function Database()
	{

		$this->_host = "127.0.0.1";
		$this->_database = "infomix";
		$this->_user = "root";
		$this->_password = "";
	}

	private function _connect()
	{
		return new PDO("mysql:host={$this->_host};dbname={$this->_database}", $this->_user, $this->_password);
	}



	public function cadastro()
	{
		if($_POST == null){
			return;
		}

		//Variavel recebe query para inserção na tabela aluno do BD
		$sql = "INSERT INTO cadastro (
							id,
							nome,
							sobre_nome,
							email,
							telefone,
							nascimento
						)
						VALUES (
							null,
							'{$_POST['nome']}',
							'{$_POST['sobre_nome']}',
							'{$_POST['email']}',
							'{$_POST['telefone']}',
							DATE('{$_POST['nascimento']}')
						)";
/*
echo json_encode(
	array(
		"nome" => $_POST['nome'],
		"sobre_nome" => $_POST['sobre_nome'],
		"email" => $_POST['email'],
		"telefone" => $_POST['telefone'],
		"nascimento" => $_POST['nascimento'],
	)
);
*/
		try
		{
			$conn = $this->_connect();
			$stmt = $conn->prepare($sql);
			$stmt->execute();
			$conn = null;
			return "Cadastro realizado com Sucesso!";
		}
		catch (Exception $ex)
		{
			echo($ex->getMessage());
			exit();
		}
	}
}
