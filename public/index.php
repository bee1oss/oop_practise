<?php
require_once "../vendor/autoload.php";

$developer = new \App\Developer("Bega",22,[6,12,12,8]);

$salary = \App\Salary::count($developer->getHours());
App\Salary::$totalHours = App\Salary::$totalHours + 100;


