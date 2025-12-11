<?php
$host = "jdbc:mysql://sql12.freesqldatabase.com:3306/";  // Your MySQL hostname
$user = "sql12811562";            // Your DB username
$pass = "VAaQzQMVBy";            // Your DB password
$db   = "sql12811562_studentdb";  // Your database name

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
