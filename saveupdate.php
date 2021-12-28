<?php
$terms = $_POST['terms'];
$data = $_POST['data'];

$myfile = fopen( "terms/" . $terms, "w") or die("Unable to open file!");
fwrite($myfile, $data);
fclose($myfile);

header('location:index.php');
