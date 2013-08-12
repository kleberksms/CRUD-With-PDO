<?php
require_once ('../model/Pessoa.class.php');
require_once ('../DAO/PessoaDAO.class.php');

$id = $_GET['id'];
$pessoaUpdate = new Pessoa();
$pessoaUpdate->setIdPessoa($id);
$pessoaUpdate->setNome($_POST['nome']);
$pessoaUpdate->setSobrenome($_POST['sobrenome']);
$pessoaUpdate->setDataNasciemento($_POST['dataNascimento']);
$pessoaUpdate->setSexo($_POST['sexo']);
$pessoaUpdate->setEmail($_POST['email']);

$pessoaDAOUpdate = new PessoaDAO();
$pessoaDAOUpdate->Alterar($pessoaUpdate);
?>