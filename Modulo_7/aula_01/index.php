<?php
    #Orientação a objetos OOP.
    class Pessoa{
        private $nome = "JOSH";
        private $idade = "100"; 
        private $peso = "100KG";


        public function crescer(){
            #$this->comer();
            echo "Estou crescendo";
        }
        public function comer(){
            echo "Estou comendo";
        }
    }

    //Instanciar o Objeto.

    $pessoa = new Pessoa;

    $pessoa->crescer();
    echo "<br/>";
    $pessoa->comer();


?>