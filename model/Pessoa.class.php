<?php
class Pessoa {
	private $idPessoa = null;
	private $nome = null;
	private $sobrenome = null;
	private $dataNasciemento = null;
	private $sexo = null;
	private $email = null;

	public function getIdPessoa() {
		return $this -> idPessoa;
	}

	public function setIdPessoa($idPessoa) {
		$this -> idPessoa = $idPessoa;
	}
	
	public function getNome() {
		return $this -> nome;
	}

	public function setNome($nome) {
		$this -> nome = $nome;
	}

	public function getSobrenome() {
		return $this -> sobrenome;
	}

	public function setSobrenome($sobrenome) {
		$this -> sobrenome = $sobrenome;
	}

	public function getDataNasciemento() {
		return $this -> dataNasciemento;
	}

	public function setDataNasciemento($dataNasciemento) {
		$this -> dataNasciemento = $dataNasciemento;
	}

	public function getSexo() {
		return $this -> sexo;
	}

	public function setSexo($sexo) {
		$this -> sexo = $sexo;
	}

	public function getEmail() {
		return $this -> email;
	}

	public function setEmail($email) {
		$this -> email = $email;
	}

}
?>