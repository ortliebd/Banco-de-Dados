<?php
$servername = "localhost";
$username = "root";
$password = "a1294873";
$dbname = "PROJETO";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?> 