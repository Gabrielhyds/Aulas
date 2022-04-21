<?php    
    /*
        Arreys = Variáveis com diversas chaves!
    */
    #definir variaveis assim não é o mais correto.
    
    $nome1 = "GABRIEL";
    $nome2 = "João";
    $nome3 = "Felipe";
    
    //$nome = array("guilherme" , "Gabriel" , "Felipe");
    //echo $nome[1];
 
    $nome[] = "jose";
    $nome[] = "felipe";
    echo $nome[1];

    $nome[0] = "<br>joao";
    echo $nome[0];

    $nome[100] = "<br>felipe";
    echo $nome[100];

    $var = ["guilherme","joao","felipe"];

    echo "<br>".$var[0];

    $var = array("gustavo",20,true,10.0);
    echo "<br>".$var[3];

    $informacao["nome"] = "Gabriel";
    $informacao["idade"] = 16;
    $informacao["cidade"] = "hortolândia";

    echo "<br>".$informacao["nome"];
    echo "<br>".$informacao["idade"];
    echo "<br>".$informacao["cidade"];


?>