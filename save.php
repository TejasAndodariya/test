<?php
require "config.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name    = $_POST["name"];
    $roll_no = $_POST["roll_no"];
    $gr_no   = $_POST["gr_no"];

    $sql = "INSERT INTO users (name, roll_no, gr_no)
            VALUES ('$name', '$roll_no', '$gr_no')";

    if ($conn->query($sql)) {
        header("Location: thankyou.html");
        exit;
    } else {
        echo "Error: " . $conn->error;
    }

} else {
    echo "Access Denied";
}
?>
