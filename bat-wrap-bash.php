<?php
require_once "D:\work-station\php-scripts\utils.php";

_echo("@echo OFF");
_echo(":: in case DelayedExpansion is on and a path contains ! ");
_echo("setlocal DISABLEDELAYEDEXPANSION");
_echo("bash \"%~dp0apt-cyg\" %*");