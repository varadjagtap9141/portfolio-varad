<?php include "../master/connection.php";
extract($_POST);
// print_r($_POST);
$query="UPDATE experience SET position='$position',company='$company',start_date='$start_date',end_date='$end_date',description='$description' where experience_id='$experience_id'";
$result=mysqli_query($conn,$query);
header("location:../master/experience.php");
?>