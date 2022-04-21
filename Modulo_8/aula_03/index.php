<?php
    $pdo = new PDO("mysql:host=localhost;dbname=modulo_8","root","");

    $id = 3;

    //OR funciona como `ou`
    //AND funciona como `e`

    $sql = $pdo->prepare("UPDATE `cliente` SET nome=?,sobrenome=? WHERE nome=? and id=?");
    
    if($sql->execute(array())){
        echo "O cliente foi atualizado com sucesso";
    }


?>