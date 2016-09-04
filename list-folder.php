<?php
$dirs = array_filter(glob('*'), 'is_dir');
var_dump($dirs);