<?php

    #Criando minhas proprias funções. 


    function mostrarNome($nome,$idade){
        echo '<big>O nome é: '."$nome</big>";
        echo '<br/>';
        echo "<big>A idade do $nome é : $idade</big>";
    }
    
    function calculadora($numero1 , $numero2){
        echo "<br/><br/><big>A soma dos números {$numero1} e {$numero2} é:</big> ".($numero1 + $numero2);
    }
    
    function verdade(){
        return true;
    }

    function retornaString(){
        return "<br/><br/><big>Retornando uma String cujo o nome é Gabriel</big>";
    }

    mostrarNome("Gabriel", 16);
    calculadora(10,20);
    echo retornaString();

?>