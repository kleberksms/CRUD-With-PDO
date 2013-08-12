<?php
require_once ('PDOConnectionFactory/PDOConnectionFactory.class.php');

try{
	$pdo = new PDOConnectionFactory();
	$pdo->getConnection();
        echo 'CONECTADO';
}catch(PDOException $ex){
	echo $ex->getMessage();
}
?>