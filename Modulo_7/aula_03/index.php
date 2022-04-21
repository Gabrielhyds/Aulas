<?php
    class Filha{
        protected function funcaoTeste(){
            echo "chamando função";
        }
        public function mostrarOla(){
            echo "olá mundo!";
        }
    }
    class Pai extends Filha{
        public function mostrarTchau(){
            echo "Tchau mundo!"."<br/>";
            $this->funcaoTeste();
        }
    }

    $pai = new Pai;
    $pai->mostrarTchau();

    echo "<br/>";

    $filha  = new Pai;
    $filha ->mostrarTchau();

    echo "<br/>";
    
    $pai = new Filha;
    $pai ->mostrarOla();

    echo "<br/>";
    
    $filha = new Filha;
    $filha->mostrarOla();
?>