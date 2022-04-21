<?php
    if(isset($_POST['request']) && $_POST['request'] == 'nome_return'){
        die(json_encode(array('resultado'=>'guilherme')));
    }
    else{
        echo 'error';  
    }
?>