<?php include "../master/connection.php";
extract($_POST);
$query="INSERT INTO skills(skill_name,title) values ('$skill_name','$title')";
    $insert=mysqli_query($conn,$query);
    header("location:../master/skill.php");
?>