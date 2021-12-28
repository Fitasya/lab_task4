<?php
$terms = $_GET['terms'];

unlink("terms/$terms");
header('location:index.php');