<?php

$url = file_get_contents('php://input');
$name = json_decode($url, true);

$username = $name["username"];
$hello = "message: Hello $username";

echo json_encode($hello), "\n";
var_dump($hello);
