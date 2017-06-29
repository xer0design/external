<?php

$eXternal = strip_tags($_POST['eXternal']);
$stocks = strip_tags($_POST['stocks']);

// sky broadcasting


if ($eXternal == "stl"){ //top left
$old_path = getcwd();
chdir('/home/pi/led-matrix-controller/www/external/scripts/sky/');
$output = shell_exec('./stl.sh > /dev/null 2>/dev/null &');
chdir($old_path);
}
if ($eXternal == "str"){ //top right
$old_path = getcwd();
chdir('/home/pi/led-matrix-controller/www/external/scripts/sky/');
$output = shell_exec('./str.sh > /dev/null 2>/dev/null &');
chdir($old_path);
}
if ($eXternal == "sbl"){ //bottom left
$old_path = getcwd();
chdir('/home/pi/led-matrix-controller/www/external/scripts/sky/');
$output = shell_exec('./sbl.sh > /dev/null 2>/dev/null &');
chdir($old_path);
}
if ($eXternal == "sbr"){// bottom right
$old_path = getcwd();
chdir('/home/pi/led-matrix-controller/www/external/scripts/sky/');
$output = shell_exec('./sbr.sh > /dev/null 2>/dev/null &');
chdir($old_path);
}

//bt sport

if ($eXternal == "btred"){ //red logo
$old_path = getcwd();
chdir('/home/pi/led-matrix-controller/www/external/scripts/bt/');
$output = shell_exec('./btred.sh > /dev/null 2>/dev/null &');
chdir($old_path);
}
if ($eXternal == "bttl"){ //top left
$old_path = getcwd();
chdir('/home/pi/led-matrix-controller/www/external/scripts/bt/');
$output = shell_exec('./bttl.sh > /dev/null 2>/dev/null &');
chdir($old_path);
}
if ($eXternal == "bttr"){ //top right
$old_path = getcwd();
chdir('/home/pi/led-matrix-controller/www/external/scripts/bt/');
$output = shell_exec('./bttr.sh > /dev/null 2>/dev/null &');
chdir($old_path);
}
if ($eXternal == "btbl"){ //bottom left
$old_path = getcwd();
chdir('/home/pi/led-matrix-controller/www/external/scripts/bt/');
$output = shell_exec('./btbl.sh > /dev/null 2>/dev/null &');
chdir($old_path);
}
if ($eXternal == "btbr"){// bottom right
$old_path = getcwd();
chdir('/home/pi/led-matrix-controller/www/external/scripts/bt/');
$output = shell_exec('./btbr.sh > /dev/null 2>/dev/null &');
chdir($old_path);
}


//fun and alt

if ($eXternal == "uncle"){
$old_path = getcwd();
chdir('/home/pi/led-matrix-controller/www/external/scripts/fun/');
$output = shell_exec('./uncle.sh > /dev/null 2>/dev/null &');
chdir($old_path);
}
if ($eXternal == "border"){
$old_path = getcwd();
chdir('/home/pi/led-matrix-controller/www/external/scripts/fun/');
$output = shell_exec('./border.sh > /dev/null 2>/dev/null &');
chdir($old_path);
}
if ($eXternal == "border2"){
$old_path = getcwd();
chdir('/home/pi/led-matrix-controller/www/external/scripts/fun/');
$output = shell_exec('./borderthick.sh > /dev/null 2>/dev/null &');
chdir($old_path);
}


//config

if ($eXternal == "ticker"){ //load ticker
$old_path = getcwd();
chdir('/home/pi/led-matrix-controller/www/external/scripts/config/');
$output = shell_exec('./ticker.sh > /dev/null 2>/dev/null &');
chdir($old_path);
}

if ($eXternal == "grid"){ //alignment grid
$old_path = getcwd();
chdir('/home/pi/led-matrix-controller/www/external/scripts/config/');
$output = shell_exec('./grid.sh > /dev/null 2>/dev/null &');
chdir($old_path);
}

if ($eXternal == "clear"){ //clear
$old_path = getcwd();
chdir('/home/pi/led-matrix-controller/www/external/scripts/config/');
$output = shell_exec('./empty.sh > /dev/null 2>/dev/null &');
chdir($old_path);
}


$external = "/home/pi/led-matrix-controller/www/external/ticker.txt";
$visExternalCheck = isset($_POST['updateext']); 
$fileext = '/home/pi/led-matrix-controller/www/external/clear.txt';
$newfileext = '/home/pi/led-matrix-controller/www/external/ticker.txt';


?>