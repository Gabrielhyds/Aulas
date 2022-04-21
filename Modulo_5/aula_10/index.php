<?php
    #OPERADORES {==} {=} {!=} {===} {!==}

    #VARIAVEIS
    $nome = 'Gabriel';
    $nome2 = 'jose';
    $valor = 10;
    $valor2 = '10';

    #{=} Um sunal de igual quer dizer que estamos atribuindo um valor
    #sempre retorna verdadeiro.
    if($nome = $nome2){
        echo $nome.'<br/>';
    }

    #{==} Apenas confere se o valor é igual.
    if($nome == $nome2){
        echo 'verdade'.'<br/>';
    }
    
    #{!=} Apenas confere se o valor é igual.
    if($nome != $nome2){
        echo 'é diferente'.'<br/>';
    }

    #Confere se são identicos ou seja mesmo valor e mesmo tipo.
    if($valor === $valor2){
        echo 'verdade'.'<br/>';
    }

    #Comparamos para ver se são diferentes(tipo e valor).
    if($valor !== $valor2){
        echo 'verdade'.'<br/>';
    }

?>