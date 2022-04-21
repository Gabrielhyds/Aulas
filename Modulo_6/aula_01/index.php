<?php

    #formas de percorrer ARRAYS[]    
    #foreach e for 

    $arr = array('chave'=>'Jose','Guilherme','Marcus','Gabriel');

    foreach($arr as $key => $value){
        echo $key;
        echo '=>';
        echo $value;
        echo '<hr/>';
    }
      
    $total = count($arr);
    #echo $total;

    for($i=0 ; $i<$total ; $i++){
        echo $arr[$i];
        echo '<br/>';
    }
?>