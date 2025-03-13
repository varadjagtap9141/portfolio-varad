<?php include "../master/connection.php";
extract($_POST);
$query="UPDATE skills SET skill_name='$skill_name',title='$title' where skill_id='$skill_id'";

$result=mysqli_query($conn,$query);

header("location:../master/skill.php");
?>