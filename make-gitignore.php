<?php
require_once "D:\work-station\php-scripts\utils.php";
$gitIgnoreContent = "/.idea\n/node_modules\n/vendor";

//move to current dir
chdir(getcwd());

$gitIgnoreFile = fopen('.gitignore', 'w');
$isWritten = fwrite($gitIgnoreFile, $gitIgnoreContent);
fclose($gitIgnoreFile);

$msg = $isWritten ? 'create file success' : 'sth go wrong, fwrite false';

_echo($msg);



