<?php
require_once ('../model/Pessoa.class.php');
require_once ('../DAO/PessoaDAO.class.php');

$pessoa = new Pessoa();
$pessoa->setNome($_POST['nome']);
$pessoa->setSobrenome($_POST['sobrenome']);
$pessoa->setDataNasciemento($_POST['dataNascimento']);
$pessoa->setSexo($_POST['sexo']);
$pessoa->setEmail($_POST['email']);

$pessoaDAO = new PessoaDAO();
$pessoaDAO->Cadastrar($pessoa);

header("Location: ../index.php");
?>