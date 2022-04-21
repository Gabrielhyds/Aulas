<?php
    
    #Funções para String.

    $conteudo = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus non diam tortor. Sed eleifend, tellus sed sagittis convallis, tortor purus molestie ante, quis vestibulum ipsum nulla vitae enim. Suspendisse pulvinar, ex et imperdiet faucibus, metus nunc convallis elit, id tempor nibh lorem quis risus. Etiam semper id odio a consectetur. Aliquam et risus arcu. In vehicula placerat maximus. Cras consectetur ultricies ipsum, vel lobortis justo vehicula eu. Aliquam pretium ornare elit in elementum. Nunc at dolor at risus rutrum ultrices at vel neque. Duis commodo a quam at elementum. Suspendisse tincidunt eget leo quis hendrerit. Nullam sed consequat nisl, ut molestie nisi. In at velit venenatis, tempus leo id, varius justo.';

    //Serve para recortar uma String.
    echo substr($conteudo,0 , 20)."<br/>";
    
    $nome = "Gabriel Yoshino";
    $nomes = explode(" ",$nome);
    print_r($nomes);

    echo "<br>";
    
    //Serve para juntar um array com um delimitador
    //No caso o espaço " "
    $nomes = implode(" ",$nomes);
    echo $nomes;

    echo "<br>";

    //Strip_tags serve para retirar todo codigo HTML.
    $conteudo = "<h1>Gabriel</h1> outra coisa!";
    echo strip_tags($conteudo);

    echo "<br>";

    //Htmlentities que mostra o codigo html na pagina.
    echo htmlentities("<div></div>");

?>