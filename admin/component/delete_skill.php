<?php include "../master/connection.php"; 
extract($_GET);
$query="DELETE FROM skills WHERE skill_id = '$skill_id'";
$delete=mysqli_query($conn,$query);
header("location:../master/skill.php");
?>