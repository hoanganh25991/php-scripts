<?php
//toggle enable|disable zend_extension <-> ;zend_extension

$php_ini_locate = 'D:\program\php-5.6.22-Win32-VC11-x64\php.ini';
$php_ini_content = file_get_contents($php_ini_locate);

//find ;zend_extension
$int = preg_match('/;zend_extension/', $php_ini_content);

$search = '';
$replace = '';

$from = '';
$to = '';
//zend_extension : disabled
if($int > 0){
	$search = ';zend_extension';
	$replace = 'zend_extension';

	$from = 'disable';
	$to = 'enable';
}

//zend_extension : enabled ?!
if($int == 0){
	$int = preg_match('/zend_extension/', $php_ini_content);
	if($int > 0){
		$search = 'zend_extension';
		$replace = ';zend_extension';

		$from = 'enable';
		$to = 'disable';
	}

	//$int == 0?
	//no `zend_extension` term in php.ini
	if($int == 0){
		echo 'zend_extension :  no config found in php.ini';
		die;
	}
}

//toggle base on $search <-> $replace
//modify php.ini content
$php_ini_content = str_replace($search, $replace, $php_ini_content);

//write back to php.ini
$php_ini_file = fopen($php_ini_locate, "w");
fwrite($php_ini_file, $php_ini_content);
fclose($php_ini_file);

echo "toggle xdebug success : from [{$from}] to [{$to}]";
die;