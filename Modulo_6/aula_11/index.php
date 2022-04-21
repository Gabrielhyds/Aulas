<?php

    $nome = "Gabriel";  
    if($nome == "Gabriel"){
        echo 'verdade'."<br>";
    }
    if($nome == 'Gabriel'): #Os dois pontos tbm podem ser ultilizados no lugar das chaves.
    echo "verdade";
    endif;
    echo "<br>";

    $contador = 0;
    while($contador < 10): #Os dois pontos tbm podem ser ultilizados no lugar das chaves.
        $contador++;
        echo "oi";
        echo "<br/>";
    endwhile;

    $array = $array();
    foreach($array as $key => $value): #Os dois pontos tbm podem ser ultilizados no lugar das chaves.
        //Aqui é o código;
    endforeach;

    for($i = 0 ; $i<10 ; $i++): #Os dois pontos tbm podem ser ultilizados no lugar das chaves.
        //Aqui é o código.
    endfor;

?>