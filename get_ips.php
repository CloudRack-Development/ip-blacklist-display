<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "virtclou1_blacklist";
$password = "cbLEc1O#O7AqmQi!";
$dbname = "virtclou1_blacklist";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT ip FROM ips");
$ips = [];

while ($row = $result->fetch_assoc()) {
    $ips[] = $row['ip'];
}

$conn->close();
echo json_encode($ips);
?>
