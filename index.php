<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>As Syafaa's Keepings</h1>
    <ol>
    <?php
    $dir = "terms";
    $a = scandir($dir);

    foreach ($a as $value) {
        if ($value == '..' || $value == '.') continue;
        echo "<li><a href='display.php?terms=$value'>$value</a></li>";
    }
    ?>
    </ol>
    <br>
    <a href="newfile.php">Create new file</a>
</body>

</html>     