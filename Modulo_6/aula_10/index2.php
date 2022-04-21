<?php


//sessão
    session_start();
    /*
    if(isset($_SESSION['nome'])){
        echo $_SESSION['nome'];
    }
    */
    unset($_SESSION['nome']);
    session_destroy();
?>