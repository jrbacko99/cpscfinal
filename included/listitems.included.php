<?php
$servername = "172.16.99.2";
$username = "jbacko";
$password = "student";
$dbname = "warehouse";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = ("SELECT * FROM inventory");
//insert to php database
header("location: ../listitems.php");
echo "<table boreder='1'";
while($conn->query($sql) === TRUE){
    echo "<tr>";
    foreach ($row as $field => $value){
      echo "<td>" . $value . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

$conn->close();

?>