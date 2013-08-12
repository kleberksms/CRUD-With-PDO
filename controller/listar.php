<?php
require_once ('../model/Pessoa.class.php');
require_once ('../DAO/PessoaDAO.class.php');

$pessoa = new PessoaDAO();
$pessoa -> Listar();
?>
