<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>
<body>
    <form method="post">
        <input type="text" name="NOME" placeholder="nome"/>
        
        <input type="text" name="IDADE" placeholder="idade"/>
        
        <input type="text" name="CPF" placeholder="123.456.789-00"/>

        <input type="submit" name="ACAO" value="ENVIAR"/>
    </form><br>
    <?php
        if(isset($_POST['ACAO'])){
            $nome = $_POST["NOME"];
            $idade = $_POST["IDADE"];
            $cpf = $_POST["CPF"];


            echo "NOME :".$nome."<br/><br/>";
            echo "IDADE :".$idade."<br/><br/>";
            echo "CPF :".$cpf;
        }else{
            echo "Algo de errado no SCRIPT não está certo!";
        }
    ?>
</body>
</html>