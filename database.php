<?php
include __DIR__ ."/account.php";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn && $conn->connect_error) {
echo "Connection failed: " . $conn->connect_error;

}
 ?>
