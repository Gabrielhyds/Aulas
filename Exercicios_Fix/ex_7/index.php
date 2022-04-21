<?php
    class Pessoa{

        public function nome($nome){
             echo "O seu nome é $nome";
        }
        public function andar(){
            echo "está andando!!";
        }
        public function falar(){
            echo "Ele está falando!!";
        }
        public function aniversario($idade){
            $var = "PARABÉNS";
            echo "Hoje é seu aniversario "."$var "."você está completando $idade de idade";
        }
        public function cpf($cpf){
            echo "O número do CPF é: $cpf";
        }
    }
    $Pessoa = new Pessoa;
    $Pessoa->nome("Gabriel");
    echo "<br/>";
    $Pessoa->andar();
    echo "<br/>";
    $Pessoa->aniversario(16);
    echo "<br/>";
    $Pessoa->cpf('123.456.778-09');
?>