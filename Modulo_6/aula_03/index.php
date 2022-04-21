<?php

    #Funções die() e sleep()

    //Durma o código por x segundos.
    sleep(3);

    echo 'um'.'<br/>';

    sleep(3);

    echo 'dois'.'<br/>';

    sleep(3);

    echo 'três'.'<br/>';



    $nome = 'Gabriel';

    if($nome == "Milena"){
        //continuamos o código.
        echo 'tudo certo';
    }else{
        echo "o nome $nome não é identico a Milena.<br/>";
        die("O script MORREU aqui! x_x");
    }
?>