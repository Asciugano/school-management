<?php
session_start();
require_once 'config.php';

$logged = $_SESSION['logged'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <nav>
      <h2 class="logo">School</h2>
      <ul>
        <li><a href="#">Corsi</a></li>
        <li><a href="#">Calendario</a></li>
        <?php if(!$logged): ?>
        <li><button class="login">Login</button></li>
        <?php else: ?>
        <li><button class="logout">Logout</button></li>
        <?php endif; ?>
      </ul>
    </nav>
</body>

</html>
