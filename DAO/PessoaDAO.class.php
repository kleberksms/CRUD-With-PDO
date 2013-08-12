<?php
require_once ('../model/Pessoa.class.php');
require_once ('../PDOConnectionFactory/PDOConnectionFactory.class.php');

class PessoaDAO {

	public function __construct() {
		$con = new PDOConnectionFactory();
		$this -> conex = $con -> getConnection();
	}

	public function Cadastrar($pessoa) {
		$query = "INSERT INTO crud.pessoa (id_pessoa, nome_pessoa, sobrenome_pessoa, data_nascimento_pessoa, sexo_pessoa, email_pessoa) VALUES (null, ?,?,?,?,?) ";
		try {
			$stmt = $this -> conex -> prepare($query);
			$stmt -> bindValue(1, $pessoa -> getNome(), PDO::PARAM_STR);
			$stmt -> bindValue(2, $pessoa -> getSobrenome(), PDO::PARAM_STR);
			$stmt -> bindValue(3, $pessoa -> getDataNasciemento(), PDO::PARAM_STR);
			$stmt -> bindValue(4, $pessoa -> getSexo(), PDO::PARAM_STR);
			$stmt -> bindValue(5, $pessoa -> getEmail(), PDO::PARAM_STR);

			$stmt -> execute();
			$this -> conex = NULL;
		} catch (PDOException $ex) {
			echo "Erro: " . $ex -> getMessage();
		}
	}

	public function Listar() {
		$query = "SELECT * FROM crud.pessoa";
		try {
			$stmt = $this -> conex -> prepare($query);
			$stmt -> execute();
			echo "<table border='0'>";
			echo "<tr><th>ID</th><th>Nome</th><th>Sobrenome</th><th>Data de Nascimento</th><th>Sexo</th><th>e-mail</th></tr>";
			while ($obj = $stmt -> fetch(PDO::FETCH_OBJ)) {
				echo "<tr>";
				echo "<td>" . $obj -> id_pessoa . "</td>" . "<td>" . $obj -> nome_pessoa . "</td>" . "<td>" . $obj -> sobrenome_pessoa . "</td>" . "<td>" . $obj -> data_nascimento_pessoa . "</td>" . "<td>" . $obj -> sexo_pessoa . "</td>" . "<td>" . $obj -> email_pessoa . "</td>" . "<td><a href='../controller/editar.php?id=" . $obj -> id_pessoa . "'>editar</td>" . "<td><a href='../controller/excluir.php?id=" . $obj -> id_pessoa . "'>excluir</td>";
				echo "</tr>";
			}

			echo "</table>";
			$this -> conex = NULL;
		} catch (PDOException $ex) {
			echo "Erro: " . $ex -> getMessage();
		}
	}

	public function Busca($id) {
		$query = "SELECT * FROM crud.pessoa WHERE id_pessoa=?";
		try {
			$stmt = $this -> conex -> prepare($query);
			$stmt -> bindValue(1, $id, PDO::PARAM_STR);
			$stmt -> execute();
			$pessoa = new Pessoa();
			
			$obj = $stmt -> fetch(PDO::FETCH_ASSOC);
			$pessoa -> setIdPessoa($obj[id_pessoa]);
			$pessoa -> setNome($obj[nome_pessoa]);
			$pessoa -> setSobrenome($obj[sobrenome_pessoa]);
			$pessoa -> setDataNasciemento($obj[data_nascimento_pessoa]);
			$pessoa -> setSexo($obj[sexo_pessoa]);
			$pessoa -> setEmail($obj[email_pessoa]);

			$this -> conex = NULL;
			return $pessoa;

		} catch (PDOException $ex) {
			echo "Erro: " . $ex -> getMessage();
		}

	}

	public function Alterar(Pessoa $pessoaUpdate) {
		$query = "UPDATE crud.pessoa SET nome_pessoa=?, sobrenome_pessoa=?, data_nascimento_pessoa=?, sexo_pessoa=?, email_pessoa=? WHERE id_pessoa=?";
		try {
			print_r($pessoaUpdate);
			$stmt = $this -> conex -> prepare($query);
			$stmt -> bindValue(1, $pessoaUpdate -> getNome(), PDO::PARAM_STR);
			$stmt -> bindValue(2, $pessoaUpdate -> getSobrenome(), PDO::PARAM_STR);
			$stmt -> bindValue(3, $pessoaUpdate -> getDataNasciemento(), PDO::PARAM_STR);
			$stmt -> bindValue(4, $pessoaUpdate -> getSexo(), PDO::PARAM_STR);
			$stmt -> bindValue(5, $pessoaUpdate -> getEmail(), PDO::PARAM_STR);
			$stmt -> bindValue(6, $pessoaUpdate -> getIdPessoa(), PDO::PARAM_STR);

			$stmt -> execute();
			$this -> conex = NULL;
		} catch (PDOException $ex) {
			echo "Erro: " . $ex -> getMessage();
		}

	}

	public function Remove($id) {
		$query = "DELETE FROM crud.pessoa WHERE id_pessoa=?";
		try {
			$stmt = $this -> conex -> prepare($query);
			$stmt -> bindValue(1, $id, PDO::PARAM_STR);
			$stmt -> execute();
			$this -> conex = NULL;
		} catch (PDOException $ex) {
			echo "Erro: " . $ex -> getMessage();
		}
	}

}
?>