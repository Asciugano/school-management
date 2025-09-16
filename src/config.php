<?php
$host = "db";
$user = "user";
$pass = "app_pass";
$db = "school";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

$_SESSION['logged'] = false;
// echo "✅ Connessione a MySQL riuscita!";
?>
