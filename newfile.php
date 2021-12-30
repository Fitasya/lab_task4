<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New File</title>
</head>

<body>
    <h1>Create new file</h1>

    <form method="post" action="save.php">
        <label>File name:</label><br>
        <input type="text" class="text" name="terms"><br><br>
        <label>File content:</label><br>
        <textarea name="data" class="teks"></textarea><br><br>
        <input type="submit" value="Save"><br><br>
    </form>
    <a href="index.php">Back</a>
</body>

</html>