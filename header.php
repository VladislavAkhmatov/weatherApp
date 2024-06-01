<?php
require_once('weatherApi.php');
require_once('cityApi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body style="background: url('img/weather/<?=$info_condition['text']?>.gif') 
    no-repeat center center fixed; background-size: cover;">