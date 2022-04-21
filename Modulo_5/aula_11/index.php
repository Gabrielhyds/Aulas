<?php
    #operadores matematicos.

    $numero = 10;
    $numero2 = '11';

    # {<} sinal de menor 
    if($numero < $numero2){
        echo 'execute no if com sinal de menor'.'<br/>';
    }else{
        echo 'a condição é falsa no if com sinal de menor'.'<br/>';
    }

    # {<=} sinal de menor ou igual
    if($numero <= $numero2){
        echo 'execute no if com sinal de menor ou igual'.'<br/>';
    }

    # {>} sinal de maior.
    if($numero > $numero2){
        echo 'execute no if com o sinal de maior'.'<br/>';
    }

    # {>=} sinal de maior ou igual.
    if($numero >= $numero2){
        echo 'execute no if com sinal de maior ou igual'.'<br/>';
    }

    #operadores logicos.
    $var1 = 'valor1';
    $var2 = 'valor1';
    $var3 = 'valor1';

    #Operador Lógico 'E'. 
    # Para ser TRUE as duas condições tem que ser verdadeira;
    if(($var1 == $var2)&&($var2 == $var3)){
        echo 'Executando a condição do if com o operador logico && / AND'.'<br/>';
    }

    #Operador Logico 'OU'.
    #Para ser TRUE apenas uma condição tem que ser verdadeira.
    if($var1== $var2 || $var1 == $var3){
        echo 'Executando a condição do if com o operador logico || / OR';
    }



?>