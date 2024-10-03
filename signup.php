<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admissiondb";

// Create connection
$conn = new mysqli($servername,$username,$password,$dbname);

// Check connection
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$email = $_POST['email'];
$password= $_POST['password'];

$sql = "INSERT INTO signup(`username`,`email`,`password`) values ('$username', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "yOUR ACCOUNT CREATED SUCCESSFULLY";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }