<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php
       if(isset($_POST['acao'])){
            $nome = @$_POST['nome'];
            $email = @$_POST['email'];
            $select = @$_POST['select'];
            echo $nome."<br>";
            echo $email."<br>";
            echo $select;
       }
    ?>
      <form method="POST">
        <input type="text" name="nome"/>
        <input type="text" name="email"/>
        <select name="select">
            <option value="Gabriel">Gabriel</option>
            <option value="Milena">Milena</option>
        </select>
        <input type="submit" name="acao" value="Enviar"/>
    </form>
</body>
</html>