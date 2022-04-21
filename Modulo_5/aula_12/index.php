<?php

    #laço de repetição for.
    for($contador=0 ; $contador<=10 ; $contador++){
        echo 'executando o FOR';
        echo '<br/>';
        echo $contador;
        echo '<hr/>';
    }

    #laço de repetição while.
    $contador = 0;
    while($contador < 10){
        echo 'Executando o WHILE';
        echo '<hr/>';
        $contador++;
    }

    #laço de repetição do while.
    $contador = 0;
    do{
        echo 'executando DO WHILE';
        echo '<hr/>';
        $contador++;
    }while($contador < 10);

?>