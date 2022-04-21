<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form Calculadora</title>
</head>
<body>
    <?php
        if(isset($_POST['btn'])){
            echo @$_POST['numero1'] + @$_POST['numero2'];
        }
    ?>
    <form method="POST">
        <input type="text" name="numero1"/>
        <input type="text" name="numero2"/>
        <input type="submit" name="btn"/>
    </form>
</body>
</html>