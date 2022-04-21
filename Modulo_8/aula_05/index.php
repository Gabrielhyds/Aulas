<?php
    $pdo = new PDO("mysql:host=localhost;dbname=modulo_8","root","");

    /*
    $sql = $pdo->prepare("SELECT * FROM post WHERE categoria_id=?");
    $sql->execute(array($_GET['categoria_id']));

    $info = $sql->fetchAll();

    
    foreach ($info as $key => $value) {
        echo 'titulo:'.$value['titulo'];
        echo "<br/>";
        echo "noticia: ".$value['conteudo'];
        echo "<hr/>";
    }

    *SELECT ULTILIZANDO FOREACH AND FOR
    echo "<pre>";
    print_r($info);
    echo "</pre>";

    foreach ($info as $key => $value) {
        echo 'titulo:'.$value['titulo'];
        echo "<br/>";
        echo "noticia: ".$value['conteudo'];
        echo "<hr/>";
    }

    for($i = 0; $i < count($info); $i++){
        echo 'titulo:'.$info[$i]['titulo'];
        echo "<br/>";
        echo "noticia: ".$info[$i]['conteudo'];
        echo "<hr/>";
    }
    */
     /*
    $sql = $pdo->prepare("SELECT * FROM categoria");
    $sql->execute();

    $info = $sql->fetchAll();

    foreach ($info as $key => $value) {
       $categoria_id = $value['id'];
       echo 'exibindo posts de: '.$value['nome'];
       echo "<br/>";
       $sql = $pdo->prepare("SELECT * FROM post where categoria_id = $categoria_id");
       $sql->execute();
       $infoPost = $sql->fetchAll();
       foreach ($infoPost as $key => $value){
            echo 'titulo:'.$value['titulo'];
            echo "<br/>";
            echo "noticia: ".$value['conteudo'];
            echo "<hr/>";
       }
    }
    */

    $sql = $pdo->prepare("SELECT p.conteudo ,p.titulo ,c.nome FROM `post` as p INNER JOIN `categoria` as c on c.id = p.categoria_id");
    $sql->execute();

    $info = $sql->fetchAll();

    
    foreach ($info as $key => $value) {
        echo "Conteudo: ".$value['nome'];
        echo "<br/>";
        echo 'titulo:'.$value['titulo'];
        echo "<br/>";
        echo "noticia: ".$value['conteudo'];
        echo "<hr/>";
    }
?>