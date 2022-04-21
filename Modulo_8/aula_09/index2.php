<?php
   $pdo = new PDO("mysql:host=localhost;dbname=db_teste","root","");
   $sql = $pdo->prepare("SELECT *FROM `cliente`");
   $sql->execute();
   $usuarios = $sql->fetchAll();
   foreach($usuarios as $key => $value){
        echo $value['nome'];
        echo "<hr/>";
   }

?>