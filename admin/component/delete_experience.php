<?php include "../master/connection.php";
extract($_GET);
$query="DELETE FROM experience WHERE experience_id ='$experience_id'";
    $delete=mysqli_query($conn,$query);
    header("location:../master/experience.php");
?>