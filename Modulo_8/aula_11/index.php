<?php
    $pdo = new PDO("mysql:host=localhost;dbname=db_teste","root","");

    $sql = $pdo->prepare("SELECT * FROM `cliente` WHERE data BETWEEN '2005-01-31' AND '2005-12-31'");

    $sql->execute();

    $nomes = $sql->fetchAll();

    print_r($nomes);


?>