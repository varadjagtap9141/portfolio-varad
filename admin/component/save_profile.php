<?php include "../master/connection.php";
extract($_POST);
// print_r($_POST);
echo "<pre>";
print_r($_FILES);
if($_FILES['profile_img']['size']>0)
{
    $profile_img=time().".jpg";
    move_uploaded_file($_FILES['profile_img']['tmp_name'],"upload/".$profile_img);
}
if($_FILES['favicon']['size']>0)
{
    $favicon=time().".jpg";
    move_uploaded_file($_FILES['favicon']['tmp_name'],"upload/".$favicon);
}
if($_FILES['logo']['size']>0)
{
    $logo=time().".jpg";
    move_uploaded_file($_FILES['logo']['tmp_name'],"upload/".$logo);
}
?>