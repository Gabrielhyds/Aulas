<?php

    class minhaClasse
    {
        const VALOR = 300;
        public function __construct()
        {
            self::VALOR;
        }
    }
    echo minhaClasse::VALOR;
    
?>