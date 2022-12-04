<?php

$servername = "172.16.99.2";
$username = "jbacko";
$password = "student";
$dbname = "warehouse";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if(!$conn) {
  die("Connection failed");
}

if (isset($_POST["submit"])) {

  $itemid = $_POST["itemid"];
  $itemn = $_POST["itemn"];
  $itemq = $_POST["itemq"];

  if (empty($itemid) || empty($itemn) || empty($itemq)) {
    echo 'Please fill in all of the information';
  }
  else{
    // inserts data into inventory table
    $query = ("INSERT INTO inventory (itemid, itemn, itemq) VALUES ('$itemid', '$itemn', '$itemq')");
    $result = mysqli_query($conn,$query);

    if ($result) {
      header("location: ../additem.php");
      echo "You have successfully added your item";
    }
    else {
      echo "Your record has NOT been added. Please check your input.";
    }
  }
}
?>
