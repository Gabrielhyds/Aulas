<?php
    #Array simples.
    $arr = ['jose','maria','julia','milena'];
    $arr = $array('jose','maria','julia','milena');

    $arr[0] = 'Gabriel';
    $arr[] = 'yoshino';

    #Arrays multidimensionais.
    
    $arr2 =  array(array('Gabriel'),array('yoshino'));

    $arr2[0] = array('chave'=>'gabriel');

    $arr2[0]['chave'] = 'gabriel';

    echo $arr2[0]['chave'];


?>