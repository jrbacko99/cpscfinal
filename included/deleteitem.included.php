<?php
$itemid = $_POST["itemid"];

$servername = "172.16.99.2";
$username = "jbacko";
$password = "student";
$dbname = "warehouse";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// inserts data into warehouse table
$sql = ("DELETE FROM itemdb WHERE itemid= VALUES ('$itemid')");

if ($conn->query($sql) === TRUE) {
  echo "Item successfully deleted";
}
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
