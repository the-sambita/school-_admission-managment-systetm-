<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "imgdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$filename = $_FILES['choose-file']['name'];
$tempname = $_FILES['choose-file']['tmp_name'];
$folder = 'images/'.$filename;

$sql = "INSERT INTO images (img)
VALUES ('$filename')";

if ($conn->query($sql) === TRUE) {
  echo "Image uploaded successfully.";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

if(move_uploaded_file($tempname, $folder)){
    echo "Image uploaded in the folder.";
}else{
    echo "Image uploaded in the folder.";
}


$conn->close();
?>