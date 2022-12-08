<?php
require_once '../../connect.php';
require_once 'createaccount.included.php';
// inserts data into student table
$sql = ("INSERT INTO employee (efirstname, elastname, eusername, epassword) VALUES ('$efirstname', '$elastname', '$eusername', '$epassword')");

// scrambles password
$scramblePasswords = password_hash($password, PASSWORD_DEFAULT);

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header("location: ../accountcreated.php");
}
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
