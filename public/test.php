<?php

require_once "../app/functions/index.php";
$url = "index.php?page=home";

$data = [20, 21, 22, 23, 24];
$numbers = $data;
$result = [];
shuffle($numbers);
foreach ($numbers as $number) {
    $temp = $result;
    array_push($temp, $number);
    $result = $temp;
}

// var_dump($result);

foreach ($result as $number => $value) {
    echo $number . " ";
}
