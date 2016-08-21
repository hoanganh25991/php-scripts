<?php

//copy file index-transform.html


$rootFolder = "D:\storage\dc.js-master\web";

if(!file_exists($rootFolder)){
	echo "b";
	echo "rootFolder: {$rootFolder} not exists";
	die;
}

//function transform for any index
function transform($rootFolder, $folderArray, $log){
	foreach ($folderArray as $folder) {
		chdir("{$rootFolder}/{$folder}");
		$log[] = shell_exec("rm index.html");
		$log[] = shell_exec("copy index-transform.html index.html");
		$log[] = "success rm copy {$folder}";
	}
}

//log msg, debug
$log = [];

//folders effected
$folderArray = [
	"",
	"examples",
	"resizing",
	"transitions"
];

transform($rootFolder, $folderArray, $log);

var_dump($log);