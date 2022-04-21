<?php

$nota = array($n1 = 0, $n2 = 4, $n3 = 10,$n4 = 10);


$notas = ($nota[0] + $nota[1] + $nota[2] + $nota[3] )/4;

echo $notas;

if($notas >= 6){
    echo " Aprovado";
}else{
    echo " Reprovado";
}
?>