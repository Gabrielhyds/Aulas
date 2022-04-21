<?php

    $nome = "G";

    switch($nome){
        case "Gabriel":
            echo "Minha variavel é GABRIEL!";
            break;
        case "joao":
            echo "Minha variavel é JOAO!";
            break;
        default:
            echo "nenhum case se encaixa no nome da variavel!!!";
            break;
    }

    echo "<br><br>";

    //Break para o loop for , while , do , foreach;
    //break tambem ultilizamos para switch;
    //continue para loop: for , while , do , e foreach;
    for($i = 0; $i < 10; $i++){
        if($i == 5){
            continue;
        }
        echo $i;
        echo "<hr>";
        /*
        if($i == 5){
            break;
        }
        */
    }

    $var = false;

    if($var == true)
        $nome = "Gabriel"; //se tirar a variavel declarada lá em cima o programa mostrará um erro de declaração de variavel;
    $idade = 16;

    echo $idade;
    echo '<br>';
    echo $nome;
?>