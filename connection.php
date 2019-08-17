<?php
$servername = "642fc9ec835b";
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