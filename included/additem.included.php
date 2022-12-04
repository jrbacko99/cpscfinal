<?php

if (isset($_POST["submit"])) {

  $itemid = $_POST["itemid"];
  $itemn = $_POST["itemn"];
  $itemq = $_POST["itemq"];

  $servername = "172.16.99.2";
  $username = "jbacko";
  $password = "student";
  $dbname = "warehouse";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // inserts data into inventory table
  $sql = ("INSERT INTO inventory (itemid, itemn, itemq) VALUES ('$itemid', '$itemn', '$itemq')");

  if ($conn->query($sql) === TRUE) {
    echo "You have successfully added your item";
    header("location: ../additem.php");
  }
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
$conn->close();

?>
