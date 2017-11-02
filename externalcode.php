<?php

$bubbleclear ="❕"; 
$bubblereplace ="❕"; 

$eXternal = strip_tags($_POST['eXternal']);
$stocks = strip_tags($_POST['stocks']);
$squigbubble = strip_tags($_POST['squigbubble']);

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

//start===================

// sky broadcasting


if ($eXternal == "2stl"){ //top left
$old_path = getcwd();
chdir('/home/pi/led-matrix-controller/www/external/scripts/sky/');
$output = shell_exec('./2stl.sh > /dev/null 2>/dev/null &');
chdir($old_path);
}
if ($eXternal == "2str"){ //top right
$old_path = getcwd();
chdir('/home/pi/led-matrix-controller/www/external/scripts/sky/');
$output = shell_exec('./2str.sh > /dev/null 2>/dev/null &');
chdir($old_path);
}
if ($eXternal == "2sbl"){ //bottom left
$old_path = getcwd();
chdir('/home/pi/led-matrix-controller/www/external/scripts/sky/');
$output = shell_exec('./2sbl.sh > /dev/null 2>/dev/null &');
chdir($old_path);
}
if ($eXternal == "2sbr"){// bottom right
$old_path = getcwd();
chdir('/home/pi/led-matrix-controller/www/external/scripts/sky/');
$output = shell_exec('./2sbr.sh > /dev/null 2>/dev/null &');
chdir($old_path);
}

//bt sport

if ($eXternal == "2btred"){ //red logo
$old_path = getcwd();
chdir('/home/pi/led-matrix-controller/www/external/scripts/bt/');
$output = shell_exec('./2btred.sh > /dev/null 2>/dev/null &');
chdir($old_path);
}
if ($eXternal == "2bttl"){ //top left
$old_path = getcwd();
chdir('/home/pi/led-matrix-controller/www/external/scripts/bt/');
$output = shell_exec('./2bttl.sh > /dev/null 2>/dev/null &');
chdir($old_path);
}
if ($eXternal == "2bttr"){ //top right
$old_path = getcwd();
chdir('/home/pi/led-matrix-controller/www/external/scripts/bt/');
$output = shell_exec('./2bttr.sh > /dev/null 2>/dev/null &');
chdir($old_path);
}
if ($eXternal == "2btbl"){ //bottom left
$old_path = getcwd();
chdir('/home/pi/led-matrix-controller/www/external/scripts/bt/');
$output = shell_exec('./2btbl.sh > /dev/null 2>/dev/null &');
chdir($old_path);
}
if ($eXternal == "2btbr"){// bottom right
$old_path = getcwd();
chdir('/home/pi/led-matrix-controller/www/external/scripts/bt/');
$output = shell_exec('./2btbr.sh > /dev/null 2>/dev/null &');
chdir($old_path);
}






//end=====================

//fun and alt

if ($eXternal == "uncle"){
$old_path = getcwd();
chdir('/home/pi/led-matrix-controller/www/external/scripts/fun/');
$output = shell_exec('./uncle.sh > /dev/null 2>/dev/null &');
chdir($old_path);
}
if ($eXternal == "unclealt"){
$old_path = getcwd();
chdir('/home/pi/led-matrix-controller/www/external/scripts/fun/');
$output = shell_exec('./unclealt.sh > /dev/null 2>/dev/null &');
chdir($old_path);
}
if ($eXternal == "florian"){
$old_path = getcwd();
chdir('/home/pi/led-matrix-controller/www/external/scripts/fun/');
$output = shell_exec('./florian.sh > /dev/null 2>/dev/null &');
chdir($old_path);
}
if ($eXternal == "sarahjane"){
$old_path = getcwd();
chdir('/home/pi/led-matrix-controller/www/external/scripts/fun/');
$output = shell_exec('./sarahjane.sh > /dev/null 2>/dev/null &');
chdir($old_path);
}
if ($eXternal == "katie"){
$old_path = getcwd();
chdir('/home/pi/led-matrix-controller/www/external/scripts/fun/');
$output = shell_exec('./katie.sh > /dev/null 2>/dev/null &');
chdir($old_path);
}
if ($eXternal == "trevor"){
$old_path = getcwd();
chdir('/home/pi/led-matrix-controller/www/external/scripts/fun/');
$output = shell_exec('./trevor.sh > /dev/null 2>/dev/null &');
chdir($old_path);
}
if ($eXternal == "natdanflo"){
$old_path = getcwd();
chdir('/home/pi/led-matrix-controller/www/external/scripts/fun/');
$output = shell_exec('./natdanflo.sh > /dev/null 2>/dev/null &');
chdir($old_path);
}
if ($eXternal == "bartdanny"){
$old_path = getcwd();
chdir('/home/pi/led-matrix-controller/www/external/scripts/fun/');
$output = shell_exec('./bartdanny.sh > /dev/null 2>/dev/null &');
chdir($old_path);
}
if ($eXternal == "karaoke"){
$old_path = getcwd();
chdir('/home/pi/led-matrix-controller/www/external/scripts/fun/');
$output = shell_exec('./karaoke.sh > /dev/null 2>/dev/null &');
chdir($old_path);
}
if ($eXternal == "saturday"){
$old_path = getcwd();
chdir('/home/pi/led-matrix-controller/www/external/scripts/fun/');
$output = shell_exec('./saturday.sh > /dev/null 2>/dev/null &');
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

if ($eXternal == "disableka"){ //KeepAlive Off
$old_path = getcwd();
chdir('/home/pi/led-matrix-controller/www/external/scripts/config/');
$output = shell_exec('./disableka.sh > /dev/null 2>/dev/null &');
chdir($old_path);
}

if ($eXternal == "reboot"){ //alignment grid
$old_path = getcwd();
chdir('/home/pi/led-matrix-controller/www/external/scripts/config/');
$output = shell_exec('./reboot.sh > /dev/null 2>/dev/null &');
chdir($old_path);
}

if ($eXternal == "clear"){ //clear
$old_path = getcwd();
chdir('/home/pi/led-matrix-controller/www/external/scripts/config/');
$output = shell_exec('./empty.sh > /dev/null 2>/dev/null &');
chdir($old_path);
}

if ($eXternal == "2clear"){ //clear
$old_path = getcwd();
chdir('/home/pi/led-matrix-controller/www/external/scripts/config/');
$output = shell_exec('./2empty.sh > /dev/null 2>/dev/null &');
chdir($old_path);
}


$external = "/home/pi/led-matrix-controller/www/external/ticker.txt";
$visExternalCheck = isset($_POST['updateext']); 
$fileext = '/home/pi/led-matrix-controller/www/external/clear.txt';
$newfileext = '/home/pi/led-matrix-controller/www/external/ticker.txt';
$newfilesquig = '/home/pi/led-matrix-controller/www/external/squig.txt';

//clear squig bubble
// clear the old external file (ignore)
if ($squigbubble != ""){
if (!copy($fileext, $newfilesquig)) { 
$bubbleclear ="❌"; 
} 
else{
$bubbleclear ="✅";
$old_path = getcwd();
chdir('/home/pi/led-matrix-controller/www/external/scripts/fun/');
$output = shell_exec('./squig.sh > /dev/null 2>/dev/null &');
chdir($old_path);
// write the new external file (igonore)
$sq = fopen ($newfilesquig, "a");
if ($sq) {
fwrite ($sq, $squigbubble);
fclose ($sq);
}
$bubblereplace ="✅";
}
}


?>