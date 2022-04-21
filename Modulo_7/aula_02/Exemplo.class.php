<?php
    /*
     *Classe de exemplo! 
     
     *Public funciona em qualquer lugar;
     *Private só conseguimos acessar dentro da classe;
     */
    class Exemplo
    {
        private $va1;
        public $var2;
        public static $var3 = "statico";

        private function exemplo1(){
        
        }

        public static function metodoStatic(){
            // echo "metodo estatico";
        }

        public function exemplo2(){
            
        }

        public function setvar1($var1){
            $this->var1 = $var1;
        }
        public function pegaVar1(){
            return $this->var1;
        }
    }
?>