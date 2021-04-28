<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rentals";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO RENTALS ( id,fname, password, email)
VALUES ('$_POST[id]' ,'$_POST[fname]', '$_POST[password]', '$_POST[email]')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>