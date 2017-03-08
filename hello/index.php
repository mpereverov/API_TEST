<?php

$url = file_get_contents('php://input');
$name = json_decode($url, true);

#print_r($name);

$username = $name["username"];
$hello = "message: Hello $username";
#echo "$hello \n";

echo json_encode($hello), "\n";
#print_r($hello);
