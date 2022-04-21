<?php
    $pdo = new PDO("mysql:host=localhost;dbname=db_teste","root","");
    
    $pdo->exec("LOCK TABLES `cliente` WRITE");
   
    sleep(10);

?>