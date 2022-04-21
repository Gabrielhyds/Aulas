<?php
    $pdo = new PDO("mysql:host=localhost;dbname=db_teste;","root","");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $pdo->prepare("SELECT * FROM `cliente` GROUP BY cargo ORDER BY nome ASC LIMIT 3 ");
    $sql->execute();
    $cliente = $sql->fetchAll();
    foreach($cliente as $key => $value){
        echo $value['nome'];
        echo "<hr>";

    }

?>