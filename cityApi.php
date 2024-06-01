<?php
$url = "https://countriesnow.space/api/v0.1/countries/population/cities";

$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
$response2 = json_decode(curl_exec($ch), 1);
curl_close($ch);
?>