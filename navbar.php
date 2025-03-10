<!DOCTYPE html>
<html>

<head>
    <?php
    include "admin/master/connection.php";
    ?>
    <?php
  $query="SELECT * FROM profile";
  $result=mysqli_query($conn,$query);
  $profile_row=mysqli_fetch_assoc($result);
  ?>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?=$profile_row['title']?></title>

    <!-- Meta Tags for SEO -->
    <meta name="description"
        content="Welcome to Varad Jagtap's portfolio. Explore projects, skills, and expertise in PHP full-stack development and web technologies." />
    <meta name="keywords"
        content="Varad Jagtap, Full-Stack Developer, PHP Developer, Web Developer, Portfolio, Interior Design Website, CMS Development" />
    <meta name="author" content="Varad Jagtap" />
    <meta name="robots" content="index, follow" />

    <!-- Open Graph Meta Tags (for social media sharing) -->
    <meta property="og:title" content="<?=$profile_row['title']?>" />
    <meta property="og:description"
        content="Explore Varad Jagtap's portfolio showcasing expertise in PHP full-stack development and web technologies." />
    <meta property="og:image" content="https://varadjagtap.netlify.app/images/favicon.png" />
    <meta property="og:url" content="https://varadjagtap.netlify.app/" />
    <meta property="og:type" content="website" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/favicon.png">

    <!-- Boxicons -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <!-- External CSS -->
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<header class="active">
    <a href="#" class="logo">
        <img width="auto" height="30" src="admin/component/upload/<?=$profile_row['logo']?>" alt="">
    </a>
    <i class="bx bx-menu" id="menu-icon"></i>
    <nav>
        <a href="#" class="active">Home</a>
        <a href="#">Services</a>
        <a href="#">Resume</a>
        <a href="#">Portfolio</a>
        <a href="#">Contact</a>
    </nav>
</header>

<body>