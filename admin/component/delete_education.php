<?php include "../master/connection.php";
extract($_GET);
$query="DELETE FROM education WHERE education_id ='$education_id'";
    $delete=mysqli_query($conn,$query);
    header("location:../master/education.php");
?>