<?php
// chdir(__DIR__);

$packageContent = '{
  "name": "project x",
  "version": "1.0.0",
  "description": "project x",
  "main": "index.js",
  "scripts": {
    "test": "echo \"Error: no test specified\" && exit 1"
  },
  "author": "Anh Le Hoang",
  "license": "MIT"
}';

$r = fopen('package.json', 'w');
fwrite($r, $packageContent);
fclose($r);
die;
