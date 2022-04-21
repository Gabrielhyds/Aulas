<?php
    //Classe abstract serve apenas para ser herdada.
    abstract class Teste{
        public function func1(){
            echo "chamando funcao 1"."<br/>";
        }
        abstract function func2();
    }

    class Principal2{
        public static function outroMetodoEstatico(){
            echo "meu outro metodo";
        }
    }
    class Principal extends Teste{
        public function func2(){
            echo "Estou declarando oficialmente um metodo ABSTRATO";
        }
        public static function metodoestatico(){
            echo "metodo estatico";
        }
        public function funcao(){
            //Principal::metodoestatico();
            //self::metodoestatico(); //self == eu mesmo| serve para metodos e atributos estaticos;
            Principal2::outroMetodoEstatico();
        }
    }

    $principal = new Principal;
    $principal->funcao();
    //$principal->func1();
    //$principal->func2();
?>