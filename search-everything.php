<?php
require_once "D:\work-station\php-scripts\utils.php";

$searchList = shell_exec("es -s -n 3 d:\work-station laravel");

$searchList = explode("\n", $searchList);

var_dump($searchList);

