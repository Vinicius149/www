<?php

define('API_BASE', 'http://localhost/api/?option=');

echo '<h3>API Request</h3><hr>';

for($i=0; $i<10; $i++){

    $resultado = api_request('random');

    // verify if response is OK (200)
    if ($resultado['status'] == 'ERROR'){
    die('Aconteceu um erro de chamada à API.');
    }
    echo "O valor randômico: " . $resultado['data'] . '<br>';
}

echo '<pre>';
print_r($resultado);

function api_request($option)
{
    $client = curl_init(API_BASE . $option);
    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($client);
    return json_decode($response, true);
}