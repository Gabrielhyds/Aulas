<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" >
        <input type="text" name="adress" >
        <input type="submit" name="acao" value="Enviar">
    </form>

    
</body>
</html>


<?php
    if(isset($_post['acao'])){
    $url = urlencode($_POST['adress']);
    $str = file_get_contents("http://maps.googleapis.com/maps/api/geocode/json?address=$url&sensor=false");
    
    $endereco = json_decode($str);
    echo $endereco->results->adress_components[0]->short_name;
}
?>