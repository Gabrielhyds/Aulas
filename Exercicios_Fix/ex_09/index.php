<?php
     $pdo = new PDO('mysql:host=localhost;dbname=cadfun','root','');

     if(isset($_POST['acao'])){
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $Rm = $_POST['Rm'];

        $sql = $pdo->prepare("INSERT INTO `usuario` VALUES (null,?,?,?,?)");

        $sql->execute(array($nome,$sobrenome,$email,$Rm));
        echo "<span style='color:green';>Usuário cadastrado com <b>SUCESSO</b></span>";
    }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Usuário</title>
</head>
<body>
    <form method="post">
        <label>NOME:</label>
        <input type="text" name="nome" required />
        
        <label>SOBRENOME:</label>
        <input type="text" name="sobrenome" required />

        <label>E-MAIL</label>
        <input type="email" name="email" required />

        <label>RM</label>
        <input type="text" name="Rm" required />

        <input type="submit" name="acao" value="ENVIAR!"/>
        <input type="reset" name="Limpar" value="LIMPAR"/>
    </form>
</body>
</html>