<?php
        //verificando se o arquivo existe.
        if(file_exists('file.txt')){
            //se ele existir exibe na tela a seguinte mensagem:
            echo "O arquivo existe<br/>";
        }else{
            //vamos criar um arquivo novo.
            $content = "meu novo conteudo criado atraves do php\r\noutra linha\r\noutra linha";
            file_put_contents('file.txt',$content);
        }
        $content = file_get_contents("file.txt");
    
        echo nl2br($content);


    /*
    for($i = 0; $i <100; $i++){
        $conteudo = "Meu conteudo do arquivo".$i;
        file_put_contents("Arquivo_hackeado".$i.".txt", $conteudo);
        unlink("Arquivo_hackeado".$i.".txt");
    }
    */ 
?>