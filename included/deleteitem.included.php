<?php
require_once '../../connect.php';

$itemid = $_POST["itemid"];

$sql = ("DELETE FROM inventory WHERE itemid = ('$itemid')");
//Removes item from database
if ($conn->query($sql) === TRUE)
    {
    header("location: ../itemdeleted.php");
    }
else
    {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
$conn->close();

?>
