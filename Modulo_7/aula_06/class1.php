<?php

class Class1{

    private $nome;
    private $idade;
    private $cpf;
    function __construct($nome, $idade,$cpf)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cpf = $cpf;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function getCpf(){
        return $this->cpf;
    }
}

?>