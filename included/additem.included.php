<?php
require_once '../../connect.php';

$itemid = $_POST["itemid"];
$itemn = $_POST["itemn"];
$itemq = $_POST["itemq"];
if (strlen((string)$itemid) === 12){
  $sql = ("INSERT INTO inventory (itemid, itemn, itemq) VALUES ('$itemid', '$itemn', '$itemq')");
//insert to php database
  if ($conn->query($sql) === TRUE)
      {
      header("location: ../itemcreated.php");
      }
  else
      {
      echo "Error: " . $sql . "<br>" . $conn->error;
      }
}
else{
  header("location: ../invaliditemid.php");
}
$conn->close();

?>
