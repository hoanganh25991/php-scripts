<?php
require_once "D:/work-station/note/php/utils.php";
//exec cmd to play sound
// vlc.exe --play-and-exit audio.wav
$soundFolder = "D:/work-station/php-scripts/sound";
chdir($soundFolder);
$soundNameArr = glob(".mp3");
var_dump($soundNameArr);
function play_sound($soundName = "end"){
	// if(!isset($soundNameArr[$soundName])){
	// 	_echo("No /033[01;32m{$soundName}/033[0m found");
	// 	return;
	// }
	shell_exec("vlc.exe --vout none D:/work-station/php-scripts/sound/{$soundName}.mp3");
}
play_sound();
