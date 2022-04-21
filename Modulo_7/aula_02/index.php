<?php
    include('Exemplo.class.php');
    //Instância do Objeto.
    $exemplo = new Exemplo();

    $exemplo->setVar1("Gabriel");
    echo $exemplo->pegaVar1();
    echo "<br/>";
    
    #retorna um erro pois o atributo está "private";
    //$exemplo->var1 = "olá"; 

    //Nesse caso não retorna erro pois o atributo está "Public";
    $exemplo->var2 = "Gabriel";
    
    $exemplo2 = new Exemplo;
    $exemplo2->setVar1("joshh");
    echo $exemplo2->pegaVar1();
    echo "<Br/><br/>";
    $exemplo2->var2 ="josh";

    echo $exemplo->var2;
    echo "<br/>";
    echo $exemplo2->var2;
    
    echo Exemplo::$var3;
    echo "<br/>";
    echo Exemplo::metodoStatic();
?>