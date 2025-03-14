<?php include "../master/connection.php"; 
extract($_POST);
$query="INSERT INTO contact(name,email,phone_no,subject,message) VALUES ('$name','$email','$phone_no','$subject','$message')";

$insert=mysqli_query($conn,$query);

header("location:../../index.php");
?>