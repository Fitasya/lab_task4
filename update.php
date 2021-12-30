<?php
$terms = $_GET['terms'];
$myfile = fopen("terms/$terms", "r");
$data = fread($myfile, filesize("terms/$terms"));
fclose($myfile);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>

<body>
  <h1><?php echo $terms; ?></h1>
  <form action="saveupdate.php" method="POST">
      <input type="hidden" name="terms" value="<?php echo $terms; ?>">
      <textarea name="data" id="data" cols="30" rows="10"><?php echo $data; ?></textarea><br><br>
      <button type="submit">Save</button><br><br>
    </form>
   
    <a href="index.php">Back</a>
</body>

</html>