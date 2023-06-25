<?php
require "../config.php";
include '../view/web-head.php';?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page</title>
    <link rel="stylesheet" href="mass.css">
    <script src="https://kit.fontawesome.com/feb30e64e7.js" crossorigin="anonymous"></script>
</head>
<body>
<section class="showcase">
    <!--        <header>-->
    <!--            <h2 class="logo">Rehab Plus</h2>-->
    <!--            <div class="toggle"><i class="fas fa-bars"></i></div>-->
    <!--        </header>-->

<!--        <video src="../resources/videos/pick-up-dumbell.mp4" muted loop autoplay></video>-->
    <img src="../resources/images/stock-photos/beach-pixabay.jpg" alt="">
    <div class="overlay"></div>

    <div class="text">
        <h2><?php echo $lang["massage"] ?></h2>
        <br>
        <div class="info">
        <p><?php echo $lang["mass1"] ?>
            <br>
            <br>
            <?php echo $lang["mass2"] ?>  <br>
            <br>
            <?php echo $lang["mass3"] ?></div>
<!--                <a href="#">Explore Training Options</a>-->
    </div>
</section>


</body>
</html>

<?php include '../view/web-foot.php';?>