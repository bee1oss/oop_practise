<?php
require_once "../vendor/autoload.php";

$name = "Bega";
$age = 22;
$experience = 2;
$hours = [6,12,12,8];

$developer = new \App\Developer($name,$age,$hours,$experience);
var_dump($developer);