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

$name = $_POST['fname'];
$fname = $_POST['fatherName'];
$mname = $_POST['mname'];
$address = $_POST['add'];
$email = $_POST['email'];
$mobile = $_POST['mnum'];
$dob = $_POST['dob'];
$category = $_POST['category'];
$gender = $_POST['gender'];
$class = $_POST['class'];



$filename = $_FILES['s-image']['name'];
$tempname = $_FILES['s-image']['tmp_name'];
$folder1 = 'images/'.$filename;

$signname = $_FILES['s-signature']['name'];
$checkname = $_FILES['s-signature']['tmp_name'];
$folder2 = 'images/'.$signname;


$sql = "INSERT INTO addmission(`fname`,`fathername`,`mothername`,`address`,`email`,`mobileno`,`dob`,`category`,`gender`,`class`,`imagePath`, `signPath`)
VALUES ('$name','$fname','$mname','$address','$email','$mobile','$dob','$category','$gender','$class','$filename', '$signname')";



if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


if(move_uploaded_file($tempname, $folder1)){
  echo "Image uploaded in the folder.";
}else{
  echo "Image uploaded in the folder.";
}

if(move_uploaded_file($checkname, $folder2)){
  echo "Image uploaded in the folder.";
}else{
  echo "Image uploaded in the folder.";
}

$conn->close();
?>