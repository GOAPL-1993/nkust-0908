<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "bbs";
//此包含設定參數(上)、連線(下)
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>