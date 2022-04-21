<?php

// Aula CURL

$ch = curl_init();

curl_setopt($ch , CURLOPT_URL, "https://localhost/aulas/modulo_11/aula_02/request.php");
curl_setopt($ch , CURLOPT_POST, 1);
curl_setopt($ch , CURLOPT_POSTFIELDS, http_build_query(array('request' => 'nome_return')));


curl_setopt($ch , CURLOPT_RETURNTRANSFER , true);

$server_output = curl_exec($ch);

curl_close($ch);
$resultado = json_decode($server_output);
print_r($resultado);
?>
