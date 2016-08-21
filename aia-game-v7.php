<?php
$indexPath = "C:\Users\hoanganh25991\Desktop\index.html";

$aiaFolderPath = "C:\Users\hoanganh25991\Desktop\aia-game-v7";

@copy($indexPath, $aiaFolderPath . "\\" . "index.html");

@unlink($aiaFolderPath . "\\" . "icon-16.png");
@unlink($aiaFolderPath . "\\" . "icon-32.png");
@unlink($aiaFolderPath . "\\" . "icon-114.png");
@unlink($aiaFolderPath . "\\" . "icon-128.png");
@unlink($aiaFolderPath . "\\" . "icon-256.png");

echo "success";