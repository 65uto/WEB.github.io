<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";  
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);   
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าเเรก | Anapatch</title>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="style2.css">
    </head>
  

</head>

<body>
    <div class="navar">
            <!-- Header -->
     <header>
            <nav>
                <ul>
                    <!-- Link -->
                    <li><a href="index.php">หน้าหลัก</a></li>
                    <li><a href="coin.php">เกม</a></li>
                    <li><a href="Info.php">เเนะนำตัว</a></li>
                    <li><a href="index.php?logout='1'">ออกจากระบบ</a></li>
                </ul>
            </nav>
        </header>
 
  
<style>
    .webtext{
        font-family: Itim;
        text-align: center;
        font-size: 20px;
    }
    body{
        background-image: url("https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/A_painting_of_Laganas_sand_and_clouds_over_blue_sky_background.jpg/800px-A_painting_of_Laganas_sand_and_clouds_over_blue_sky_background.jpg");
        background-size: 100%;
        background-repeat: none;
    }
    .imgT{
        width: 20%;
        height: 20%;
        }
</style>
    <div class="webtext">
        <marquee behavior="right" direction="left" style=" width:80%;"><h1 style="font-size: 60px;color: black;" >
            <p>Wellcome to Anapatch_WebSite 
                <img src="https://cdn.iconscout.com/icon/free/png-256/smile-2689416-2232257.png" width="50" height="60"> 

            </p></h1>
        </marquee>
        <marquee behavior="left" direction="right" style=" width:80%;">
            <p><img class="imgT" src=".\img\IMG_25640826_221634.jpg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/54/Emojione_1F60E.svg/512px-Emojione_1F60E.svg.png"></p>
        </marquee>
    </div>

</body>

</html>