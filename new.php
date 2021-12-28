<?php
$newtxt = $_POST['newtxt'];

$myfile = fopen("biodata.txt", "w") or die("Unable to open file!");
$txt =  $newtxt . "\n";

fwrite($myfile, $txt);
fclose($myfile);

header('location:index.php');
