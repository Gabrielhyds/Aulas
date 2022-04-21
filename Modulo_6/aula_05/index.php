<?php

    #Ultilizando as funções Include() e Date().

    /* 
        * Trabalhando com datas. 
    */
    date_default_timezone_set("America/sao_Paulo");

    $data = date('d/m/Y H:i:s',time()+(60*10));
    
    echo $data.'<br/><br/>';
    
    #Funcão include().
    $titulo_site = 'Titulo do meu site';
    include('header.php');

?>

    <h1 style="background:red;color:midnightblue;max-width:400px;">Meu conteudo da home!</h1>
<?php
    include('footer.php');
?>