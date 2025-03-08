<?php include "../master/connection.php";
extract($_POST);
if($_FILES['profile_img']['size']>0)
{
    $profile_img=time().".jpg";
    move_uploaded_file($_FILES['profile_img']['tmp_name'],"upload/".$profile_img);
    $update="UPDATE profile SET profile_img='$profile_img' WHERE profile_id='$profile_id'";
    mysqli_query($conn,$update);
}
if($_FILES['favicon']['size']>0)
{
    $favicon=time().".png";
    move_uploaded_file($_FILES['favicon']['tmp_name'],"upload/".$favicon);
    $update="UPDATE profile SET favicon='$favicon' WHERE profile_id='$profile_id'";
    mysqli_query($conn,$update);
}
if($_FILES['logo']['size']>0)
{
    $logo=time().".png";
    move_uploaded_file($_FILES['logo']['tmp_name'],"upload/".$logo);
    $update="UPDATE profile SET logo='$logo' WHERE profile_id='$profile_id'";
    mysqli_query($conn,$update);
}
if($_FILES['cv']['size'] > 0)
{
    $cv=time().$_FILES['cv']['name'];   //using name we can store our file in any extension
    move_uploaded_file($_FILES['cv']['tmp_name'],"upload/".$cv);
    $update="UPDATE profile SET cv='$cv' WHERE profile_id='$profile_id'";
    mysqli_query($conn,$update);
}
$update = "UPDATE profile SET 
        name = '$name',
        email = '$email',
        phone = '$phone',
        address = '$address',
        city = '$city',
        title = '$title',
        age = '$age',
        intro = '$intro',
        gender = '$gender',
        status = '$status',
        experience = '$experience',
        link_1 = '$link_1',
        link_2 = '$link_2',
        link_3 = '$link_3',
        nationality = '$nationality',
        available = '$available',
        language = '$language'
        WHERE profile_id='$profile_id'";
$result=mysqli_query($conn,$update);
header("location:../master/profile.php");
?>