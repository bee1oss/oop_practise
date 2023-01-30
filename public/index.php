<?php
require_once "../vendor/autoload.php";

$name = "Bega";
$age = 22;
$hours = [6,12,12,8];

$developer = new \App\Developer("Bega",22,[6,12,12,8]);
$salary = new \app\Salary::count($developer->getHours());
var_dump($salary);