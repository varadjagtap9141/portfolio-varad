<?php include "../master/connection.php";
extract($_POST);
$query="INSERT INTO education(education,university,start_year,end_year,description) values ('$education','$university','$start_year','$end_year','$description')";
$insert=mysqli_query($conn,$query);
header("location:../master/education.php");
?>