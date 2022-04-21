<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox</title>
</head>
<body>
    <?php
        if(isset($_POST['acao'])){
            foreach ($_POST['valor'] as $key => $value) {
                echo $value."<br/>";
            }
        }
    ?>
    <form method="post">
        <input type="checkbox" name="valor[]" value="10">10
        <input type="checkbox" name="valor[]" value="11">11
        <input type="checkbox" name="valor[]" value="12">12
        <input type="checkbox" name="valor[]" value="13">13
        <input type="checkbox" name="valor[]" value="14">14
        <input type="submit" name="acao" value="enviar"/>
    </form>
</body>
</html>