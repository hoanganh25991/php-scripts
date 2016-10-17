<?php
require_once "D:\\work-station\\php-scripts\\utils.php";

ob_start();

try{
	//FORM
	if(!array_key_exists(1, $argv)){
		_echo("which file you want to link???");
		return;
	}
	$where = $argv[1];
	$rootFolder = getcwd();

	//TO
	$snippetFolder = "D:\work-station\snippet";
	if(array_key_exists(2, $argv)){
		$snippetFolder = $argv[2];
	}

	//LINK FILE1, FILE2
	$file1 = "{$rootFolder}/{$where}";

	$file2 = "{$snippetFolder}/{$where}";

	if(!file_exists($file1)){
		_echo("{$where} not exists");
		return;
	}

	//FILE1 exists
	_echo(shell_exec("link {$file1} {$file2}"));
}finally{
	// $log = ob_get_contents();

	// ob_end_clean()
	$date = new DateTime();
	$secondInDay = 24*60*60*$date->format('H') + 60*$date->format('i') + $date->format('s');
	$logFileName = "log-" . $date->format('Y-m-d') . "_{$secondInDay}.txt";
	$cwd = getcwd();
	_echo("[{$logFileName}] \t |please read in {$cwd}");
	$log = ob_get_clean();

	//notify to console
	_echo($log);

	//save log
	// $logFile = fopen($logFileName, 'w');
	// fwrite($logFile, $log);
	// fclose($logFile);
}

die;