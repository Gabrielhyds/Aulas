<?php
    #sessões é quando a gente armazena um valor numa variavel e mesmo que o usuário
    #fecha a aba do navegador quando ele voltar a variavel ainda estará ali guardada.
    #SÓ é destruida após o usuário fechar o navegador
    
    #cookies é quando a gente cria uma  variavel e a gente pode determinar quanto tempo
    #queremos que fique armazenada no computador da pessoa.


    session_start();
    $_SESSION['nome'] = "Gabriel";
    $_SESSION['idade'] = "16";
    //echo $_SESSION['nome'];


    #cookie 
    setcookie("nome" , "Gabriel" , time() - (60*60*24), "/");
    echo $_COOKIE['nome'];
?>