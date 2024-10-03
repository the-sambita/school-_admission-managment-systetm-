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

$email=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT * FROM signup WHERE `email`= '$email' AND `password`='$password'";

$result=$conn->query($sql);


if ($result->num_rows > 0) {
echo "LOGIN SUCCESSFUL";

}
else{
    echo "invalid credentials";
}
