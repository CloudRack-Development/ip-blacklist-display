<?php
$servername = "localhost";
$username = "";
$password = "";
$dbname = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Read IPs from ips.txt
$ips = file('/var/www/7be666cf-69f4-41b0-bc8d-b79611f8e583/ips.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// Sync with the database
$conn->query("TRUNCATE TABLE ips");
$stmt = $conn->prepare("INSERT INTO ips (ip) VALUES (?)");

foreach ($ips as $ip) {
    $stmt->bind_param("s", $ip);
    $stmt->execute();
}

$stmt->close();
$conn->close();
echo "IPs synced successfully. <a href='//blacklist.virtcloud.pro'>Head Back To Blacklist Check.</a>";
?>
