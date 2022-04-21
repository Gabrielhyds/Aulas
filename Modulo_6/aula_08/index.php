<?php

//Serve para unir 1 ou mais arrays;
$array1 = array("chave1"=>"valor1","chave2"=>"chave2");
$array2 = array("chave3"=>"valor3","chave4"=>"chave4");
$array3 = array("chave5"=>"valor5");
$result = array_merge($array1,$array2,$array3);

print_r($result);


echo "<br>";

//Array intersect key serve para retornar valores com a mesma chave em 1 ou mais arrays.
$array1 = array("chave1"=>"valor1","chave2"=>"valor2");
$array2 = array("chave2"=>"Outro valor","chave1"=>"Outro valor","chave3"=>"Outro Valor","chave4"=>"Outro valor");
print_r(array_intersect_key($array1,$array2));


echo "<br>";

//Array map serve para aplicar uma função em todos os valores do array.
$arr = ['<p>Guilherme</p>','joao','<h1>Fabricio</h1>'];
print_r(array_map('strip_tags',$arr));

?>