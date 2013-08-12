<?php
require_once ('../model/Pessoa.class.php');
require_once ('../DAO/PessoaDAO.class.php');

$id = $_GET['id'];
$pessoaDAO = new PessoaDAO();
try {
	$pessoaDAO -> Remove($id);
	header("Location: ../index.php");
} catch (PDOException $ex) {
	echo "Erro: " . $ex -> getMessage();
}
?>
