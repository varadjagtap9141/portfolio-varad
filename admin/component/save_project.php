<?php include "../master/connection.php";
extract($_POST);
if($_FILES['screenshot']['size']>0)
{
    $screenshot=time().".jpg";
    move_uploaded_file($_FILES['screenshot']['tmp_name'],"upload/".$screenshot);
}
$query="INSERT INTO portfolio(project_name,technology,detail,screenshot,link,git_repo) VALUES ('$project_name','$technology','$detail','$screenshot','$link','$git_repo')";
    $insert=mysqli_query($conn,$query);
    header("location:../master/portfolio.php");
?>