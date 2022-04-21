<?php
    #Condições {if} {else} {elseif} exemplo 4:
    $VAR = 10 + 5;
    $VAR3 = "10 + 5";

    if($VAR == $VAR3){
        echo "verdade";
    }elseif($VAR != $VAR3){
        echo "Verdade na condição elseif";
    }
    else{
        echo "falso";
    }

?>
