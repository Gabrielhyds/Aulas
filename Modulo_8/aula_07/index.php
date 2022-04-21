<?php 
    $pdo = new PDO("mysql:host=localhost;dbname=db_teste;","root","");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $pdo->prepare("SELECT * FROM `cliente` LEFT JOIN cargos ON `cliente`.`cargo` = `cargos`.`idCargo`");
    $sql->execute();
    $cliente = $sql->fetchAll();
    foreach($cliente as $key => $value){
        echo $value['nome'];
        echo " | ";
        echo $value['nome_cargo'];
        echo "<hr>";

    }

?>
