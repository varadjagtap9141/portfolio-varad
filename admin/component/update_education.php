<?php include "../master/connection.php";
extract($_POST);
// print_r($_POST);
$query="UPDATE education SET education='$education',university='$university',start_year='$start_year',end_year='$end_year',description='$description' where education_id='$education_id'";
$result=mysqli_query($conn,$query);
header("location:../master/education.php");
?>