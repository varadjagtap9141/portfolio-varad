<?php include "../master/connection.php";
extract($_POST);
$query="INSERT INTO experience(position,`description`,company,start_date,end_date) values ('$position','$description','$company','$start_date','$end_date')";
$insert=mysqli_query($conn,$query);
header("location:../master/experience.php");
?>