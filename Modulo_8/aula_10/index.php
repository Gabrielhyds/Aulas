<?php
    $pdo = new PDO("mysql:host=localhost;dbname=db_teste","root","");

    $sql = $pdo->prepare("SELECT * FROM `cliente` WHERE nome LIKE '%o%'");

    $sql->execute();

    echo $sql->fetch()["nome"];

    echo "<br/>";

    $nomes = $sql->fetchAll();

    print_r($nomes);


?>