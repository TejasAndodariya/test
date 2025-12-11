<?php
session_start();

$user = $_POST["user"];
$pass = $_POST["pass"];

if ($user === "admin" && $pass === "12345") {
    $_SESSION["admin"] = true;
    header("Location: admin-view.php");
    exit;
} else {
    echo "Wrong login!";
}
?>
