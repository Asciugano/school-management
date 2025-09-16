<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Corsi</title>
  <link href="../css/style.css" rel="stylesheet">
</head>

<body>
  <h1>Corsi</h1>
  <?php include("../nav.php"); ?>
</body>

</html>
