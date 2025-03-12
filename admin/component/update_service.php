<?php include "../master/connection.php";
extract($_POST);
$query="UPDATE services SET service_title='$service_title', service_subtitle='$service_subtitle' where service_id='$service_id'";
$result=mysqli_query($conn,$query);
header("location:../master/service.php");
?>