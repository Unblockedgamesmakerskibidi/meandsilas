<?php
$servername = "localhost";
$username = "root";  // Update if needed
$password = "";
$dbname = "your_database"; // Replace with your actual database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST['text'];
    $sql = "UPDATE editable_text SET content='$text' WHERE id=1";
    $conn->query($sql);
}
$conn->close();
?>
