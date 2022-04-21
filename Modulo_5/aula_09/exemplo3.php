<?php
    #Condições {if} {else} {elseif} exemplo 3:
    $var = "Gabriel";
    $var2 = "Gabriel"; #para entrar no else tem que mudar a variavel.

    if($var == $var2){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>O site é meu. @copyright</h1>
</body>
</html>
<?php
    }
    else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>OUTRO SITE MEU!!!</h2>
</body>
</html>
<?php
    }
?>