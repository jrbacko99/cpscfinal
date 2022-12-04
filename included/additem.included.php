<?php

if (isset($_POST["submit"])) {
  $itemid = $_POST["itemid"];
  $itemn = $_POST["itemn"];
  $itemq = $_POST["itemq"];

  require_once 'db.included.php';
  // inserts data into inventory table
  $sql = ("INSERT INTO inventory (itemid, itemn, itemq) VALUES ('$itemid', '$itemn', '$itemq')");
}
else {
  header("location: ../profile.php");
  exit();
}
?>
