<?php
require_once 'vendor/autoload.php';

$Parsedown = new Parsedown();

var_dump($argv);

$mardownConent = file_get_contents(getcwd() . '/' . $argv[1]);

$htmlFile = fopen('index.html', 'w');

fwrite($htmlFile, $Parsedown->text($mardownConent));

fclose($htmlFile);

die;