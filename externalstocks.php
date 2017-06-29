<?php
// Capture and send to screen.
if ($stocks == "stocks"){
$msg .= "text = ((\"APPL +12.8  \", (255,0,0)), (\"GOOG +23.4  \", (0,255,0)), (\"NIBS -51.2  \", (255,0,0)), (\"PIP +2.1  \", (0,255,0)), (\"TREV +3.1  \", (0,255,0)), (\"SQUIG -69.69  \", (255,0,0)), (\"FLOR +1337.0  \", (0,255,0)), (\"GIN +20.1  \", (0,255,0)), (\"VDKA +7.3  \", (0,255,0)), (\"PINT +50.1  \", (0,255,0)), (\"FAGS -11.60  \", (255,0,0)), (\"VAPE +2.8  \", (0,255,0)), (\"SHOT +5.10  \", (0,255,0)), (\"the stock exchange is now open! keep your eyes on the screens for great discounted drinks offers!  \", (255,255,255)), (\"PIPE -6.1  \", (255,0,0)), (\"PUSS + 6.9  \", (0,255,0)), (\"TITS +32.DD  \", (0,255,0)), (\"SHAM +0.1  \", (0,255,0)), (\"JOE -12.4  \", (255,0,0)), (\"TED +33.0  \", (0,255,0)), (\"BEER +4.2  \", (0,255,0)), (\"BUD +4.8  \", (0,255,0)), (\"IRE +1916  \", (0,255,0)), (\"UK -2018  \", (255,0,0)), (\"RED -1  \", (255,0,0)), (\"BULL +1  \", (0,255,0)), (\"MILK -40.2  \", (255,0,0)), (\"TEA -178.3  \", (255,0,0)), (\"BULS +0.1  \", (0,255,0)), (\"PORT +6.2  \", (0,255,0)), (\"WINE +7.9  \", (0,255,0)))";
//write the file
$fp = fopen ($filename, "a");
if ($fp) {
fwrite ($fp, $msg);
fclose ($fp);
}
//reload (uncomment this block if removing the check box)
$old_path = getcwd();
chdir('/home/pi/led-matrix-controller/rpi-rgb-led-matrix/examples-api-use/');
$output = shell_exec('sudo ./php.sh > /dev/null 2>/dev/null &');
chdir($old_path);
}
?>
