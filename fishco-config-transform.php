<?php

//copy file index-transform.html


$rootFolder = "D:\\www\\html\\fish-co-cms";

if(!file_exists($rootFolder)){
	echo "rootFolder: {$rootFolder} not exists";
	die;
}

//function transform for any index
function transform($rootFolder, $folderArray, $log){
	foreach ($folderArray as $folder) {
		chdir("{$rootFolder}/{$folder}");
		$log[] = shell_exec("rm ewcfg10.php");
		$log[] = shell_exec("copy ewcfg10-transform.php ewcfg10.php");
		$log[] = "success rm|copy {$folder}";
	}
}

//log msg, debug
$log = [];

//folders effected
$folderArray = [
	""
];

transform($rootFolder, $folderArray, $log);

var_dump($log);