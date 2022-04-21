<?php
    $pdo = new PDO("mysql:host=localhost;dbname=modulo_8","root","");
    $id = 8;
    
    $sql = $pdo->prepare("DELETE FROM `cliente` WHERE id=?");
    
    if($sql->execute(array($id))){
        echo "O cliente foi EXCLUIDO com sucesso";
    }


?>