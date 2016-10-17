<?php
// chdir(__DIR__);
$cwd = getcwd();
$a = explode("\\", $cwd);
$currentFolderName = end($a);

$packageContent = "{
  'name': '{$currentFolderName}',
  'version': '1.0.0',
  'description': '{$currentFolderName}',
  'main': 'index.js',
  'scripts': {
    'test': 'echo \'Error: no test specified\' && exit 1'
  },
  'author': 'Anh Le Hoang',
  'license': 'MIT'
}";

$packageContent = str_replace("'", "\"", $packageContent);

// echo $packageContent;

$r = fopen('package.json', 'w');
fwrite($r, $packageContent);
fclose($r);
echo "package.json\tcreated";
die;
