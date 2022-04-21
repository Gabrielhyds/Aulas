<?php

    #VARIAVEIS
    $frase = "My name is ";
    $name = "Gabriel";
    $age = 23;
    $nomeDaClasse = 'box';

    define('NAME','Gabriel');

    #Concatenação com aspas simples de uma variavel comum.
    echo 'My name is '.$name."<br>";
    
    #Concatenação com aspas duplas pode colocar a variavel sem usar o .
    echo "My name is $name"."<br>";
    
    #contatenação de uma frase com um nome.
    echo "$frase $name"."<br>";
    
    #Concatenação com aspas simples de uma constante.
    echo 'My name is : '.NAME."<br>";
    
    #Concatenação com aspas duplas pode colocar a variavel sem usar o .
    echo "My age is: $age";


    echo "<div class=\"$nomeDaClasse\">conteudo da div</div>";


?>

