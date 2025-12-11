<?php
session_start();
if (!isset($_SESSION["admin"])) {
    echo "Access denied!";
    exit;
}

require "config.php";

$result = $conn->query("SELECT * FROM users");
?>

<h2>All Students</h2>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Roll No</th>
    <th>GR No</th>
</tr>

<?php while($row = $result->fetch_assoc()) : ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['name'] ?></td>
    <td><?= $row['roll_no'] ?></td>
    <td><?= $row['gr_no'] ?></td>
</tr>
<?php endwhile; ?>

</table>

<br>
<a href="logout.php">Logout</a>
