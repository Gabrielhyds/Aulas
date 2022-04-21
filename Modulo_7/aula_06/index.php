<?php
    include("class1.php");
    $class1 =  new Class1("Gabriel","16","123.456.541-70");

    echo $class1->getNome()."<br/>";
    echo $class1->getIdade()."<br/>";
    echo $class1->getCpf()."<br/>";
?>