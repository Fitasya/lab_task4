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
  <title>Display File</title>
</head>

<body>
  <h1><?php echo $terms; ?></h1>
  <p><?php echo nl2br($data); ?></p>
  <a href="update.php?terms=<?php echo $terms; ?>">Update</a> &bull;
  <a href="index.php">Back</a> &bull;
  <a href="delete.php?terms=<?php echo $terms; ?>" onclick="return confirm('Are you sure, you want to delete?');">Delete</a>
</body>

</html>