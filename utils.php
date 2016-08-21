<?php
$msgPatterns = [
	"sorry" => mb_convert_encoding("(ò_ó)", "Windows-1252", "UTF-8") . " We're sorry",
	"mano" => "ba xa yeu dau"
];

function _echo($msg, $important = false){
	//transform into sample pattern
	if(isset($msgPatterns[$msg])){
		$msg = $msgPatterns[$msg];
	}

	//colorize when marked important
	if($important){
		$msg = "\033[01;32m{$msg}\033[0m";
	}

	//simple echo
	echo $msg;

	//echo new line feed
	echo "\n";
}

$soundFolder = "D:\\work-station\\php-scripts\\sound";

$soundNameArr = glob("{$soundFolder}\\*.mp3");

function play_sound($soundName = "end"){
	if(!isset($soundNameArr[$soundName])){
		_echo("sorry");
		_echo("We currently support: \n".implode($soundNameArr, "\n"));
	}
	shell_exec("vlc -I ncurses --play-and-exit D:\\work-station\\php-scripts\\sound\\{$soundName}.mp3");
}