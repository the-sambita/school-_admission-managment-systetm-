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

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO contact(`name`,`email`,`message`) values ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "THANK YOU for contacting us";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>