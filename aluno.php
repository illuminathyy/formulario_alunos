<?php
class Aluno {
    public $nome;
    public $idade;
    public $dataNascimento;
    public $matricula;
    public $sexo;
    public $email;

    public function __construct($nome, $idade, $dataNascimento, $matricula,$sexo,$email) {
	$this->nome = $nome;
	$this->idade = $idade;
	$this->dataNascimento = $dataNascimento;
	$this->matricula = $matricula;
    $this->sexo = $sexo;
    $this->email = $email;

    }
    public function idade() {
        $dataAtual = new DateTime();
        $dataNascimento = new DateTime($this->dataNascimento);
        $idade = $dataAtual->diff($dataNascimento)->y; 
        return $idade;
    }
}
?>