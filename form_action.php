<!DOCTYPE html>
<html>
  <head>
  //<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
a{
    color:white;
 }

a:hover {
  color: black;
}
</style>
</head>
<body>
<?php

include "config.php";

 if (isset($_POST['submit'])) 
 {

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
  


$sql = "INSERT INTO tbl_admission(`fname`,`fathername`,`mothername`,`address`,`email`,`mobileno`,`dob`,`category`,`gender`,`class`) 
VALUES ('$name','$fname','$mname','$address','$email','$mobile','$dob','$category','$gender','$class')";


 $result = $conn->query($sql);

if ($result == TRUE) {

  echo " <h4> <b>  Your admission form has been submitted successfully! </b> </h4>";
  echo "Kindly visit our department office for further process...  <br><br>";
    
  }
  else{

     echo "Error:". $sql . "<br>". $conn->error;

   }
  
}

?>
</body>
</html>