<?php
    date_default_timezone_set('America/Sao_Paulo');
    $pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');
    
    if(isset($_POST['acao'])){
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $momento_registro = date('Y-m-d H:i:s');

    $sql = $pdo->prepare("INSERT INTO `cliente` VALUES (null,?,?,?)");
    
    $sql->execute(array($nome,$sobrenome,$momento_registro));
    echo 'cliente inserido com sucesso!';    
    
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <form method="POST">
        NOME: <input type="text" name='nome' required />
        SOBRENOME: <input type="text" name='sobrenome' required />
        <input type='submit' name='acao' value='Enviar!'/>
    </form>
</body>
</html>