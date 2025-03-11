<?php include "../master/connection.php";
extract($_POST);
$query="UPDATE highlight SET post_1='$post_1', post_2='$post_2',post_3='$post_3',post_4='$post_4' WHERE highlight_id = '$highlight_id'";
$update=mysqli_query($conn,$query);
header("Location:../master/highlight.php");
?>