<?php
    if(!isset($_GET['city'])){
        $_GET['city'] = 'Астана';
    }
    $url = 'https://api.weatherapi.com/v1/current.json';
    $options = [
        'q' => $_GET['city'],
        'key' => 'c99869bee8a4407392494350242605',
        'aqi' => 'no',
        'lang' => 'ru'
    ];

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url.'?'.http_build_query($options));
    $response = json_decode(curl_exec($ch), 1);
    curl_close($ch);
    $location = $response['location'];
    $info = $response['current'];
    $info_condition = $info['condition'];
?>