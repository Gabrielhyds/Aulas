<?php
/*
  * Os scripts não funcionaram pois a versão do php no meu 
  * PC é 8.0.9 e eles somente funcionam até no maximo a versão  
  * 7 . Portanto deixarei o codigo usado na aula para que caso um dia 
  * precisar usar estará aqui... 0_-  20/04/22
*/

use FlyingLuscas\Correios\Client;

require 'vendor/autoload.php';

$correios = new Client;

$correios->zipcode()
    ->find('01001-000');


?>