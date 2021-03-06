<?php
require_once "D:\\work-station\\php-scripts\\utils.php";
// require_once "D:/work-station/note/php/play-sound.php";

ob_start();

$mapHintHotkey = [
	"close sublime text" => "ctrl + shif + W",
	"close sublime" => "ctrl + shif + W",
	
	"color console php" => "\\033[01;32mGREEN\\033[0m, result: \033[01;32mGREEN\033[0m",
	"color console" => "\\033[01;32mGREEN\\033[0m, result: \033[01;32mGREEN\033[0m
Black 0;30
Blue 0;34
Green 0;32
Cyan 0;36
Red 0;31
Purple 0;35
Brown 0;33
Light Gray 0;37 
Dark Gray 1;30
Light Blue 1;34
Light Green 1;32
Light Cyan 1;36
Light Red 1;31
Light Purple 1;35
Yellow 1;33
White 1;37",
	
	"vlc noui" => "vlc -I ncurses <file>\n@see https://wiki.videolan.org/Documentation:Modules/ncurses",
	"vlc console" => "vlc -I ncurses <file>\n@see https://wiki.videolan.org/Documentation:Modules/ncurses",
	"vlc without ui" => "vlc -I ncurses <file>\n@see https://wiki.videolan.org/Documentation:Modules/ncurses",

	"git remote delete branch" => "git push origin --delete <branchName>",
	"git delete remote branch" => "git push origin --delete <branchName>",
	"git remote delete" => "git push origin --delete <branchName>",

	"mac address" => "cmd: getmac",
	"get mac address" => "cmd: getmac",

	"xin donate" => "patreon.com",

	"run bash file" => "create <file>.bat, which wrap <file>.bash, script:\n\n@echo OFF
:: in case DelayedExpansion is on and a path contains ! 
setlocal DISABLEDELAYEDEXPANSION
bash \"%~dp0\033[01;32mapt-cyg\033[0m\" %*",

	"all hints" => "all hints",
	"clear data" => "SET FOREIGN_KEY_CHECKS = 0;
SET AUTOCOMMIT = 0;
START TRANSACTION;
TRUNCATE TABLE rooms;
SET FOREIGN_KEY_CHECKS = 1;
COMMIT;
SET AUTOCOMMIT = 1 ;"

];

try{
	$whichHotkey;
	//FORM
	if(!array_key_exists(1, $argv)){
		_echo("which hotkey you want to hint???");
		return;
	}
	$whichHotkey = $argv[1];

	if(!isset($mapHintHotkey[$whichHotkey])){
		//ᕦ(ò_óˇ)ᕤ
		// $sorryFace = mb_convert_encoding("(ò_ó)", "Windows-1252", "UTF-8");
		// _echo(mb_internal_encoding());
		// _echo("{$sorryFace} We're sorry!!");
		
		//support by utils, ONLY need
		_echo("sorry");

		_echo("No hint on \033[01;32m{$whichHotkey}\033[0m");

		return;
	}

	_echo("");
	_echo($mapHintHotkey[$whichHotkey]);

	//special case "all hints"
	if($mapHintHotkey[$whichHotkey] == "all hints"){
		var_dump($mapHintHotkey);
	}
}finally{
	//build log name
	$date = new DateTime();
	$secondInDay = 24*60*60*$date->format('H') + 60*$date->format('i') + $date->format('s');
	$logNotify = "\nlog at: " . $date->format('Y-m-d') . "_{$secondInDay}";

	echo "{$logNotify}";

	//get content
	$log = ob_get_clean();

	//notify user, log name
	

	//notify to console
	_echo($log);

	
}
die;
