<?php
    // Cria um diretorio.
        mkdir('pasta');

    // Deleta um diretorio.
        //rmdir('pasta');

    //is_dir verifica se a pasta ou o diretorio existe. 
    /*
        if(is_dir('pasta')){
            echo "é uma pasta valida";
        }
        else{
            echo "não existe ou não é uma pasta"
        }
    */

    ls("pasta");
?>