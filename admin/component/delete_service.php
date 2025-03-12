<?php include "../master/connection.php"; 
extract($_GET);
$query="DELETE FROM services WHERE service_id = '$service_id'";
$delete=mysqli_query($conn,$query);
header("location:../master/service.php");
?>