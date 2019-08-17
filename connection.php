<?php
$servername = "53621d85d089";
$username = "user";
$password = "pass";
$db = "dxc";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>