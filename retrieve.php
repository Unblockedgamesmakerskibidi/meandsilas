<?php
$servername = "localhost";
$username = "root";  
$password = "";
$dbname = "your_database";

$conn = new mysqli($servername, $username, $password, $dbname);

$result = $conn->query("SELECT content FROM editable_text WHERE id=1");
$row = $result->fetch_assoc();

echo $row['content'];

$conn->close();
?>
