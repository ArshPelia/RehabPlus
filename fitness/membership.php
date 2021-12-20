<?php
require "../config.php";
include '../view/head.php';?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rehab Plus</title>
    <link rel="stylesheet" href="member.css">
    <link rel="stylesheet" href="../styles/normalize.css">
    <script src="https://kit.fontawesome.com/feb30e64e7.js" crossorigin="anonymous"></script>
</head>
<body>
    <section class="showcase">
<!--        <header>-->
<!--            <h2 class="logo">Rehab Plus</h2>-->
<!--            <div class="toggle"><i class="fas fa-bars"></i></div>-->
<!--        </header>-->

        <video src="../resources/videos/pick-up-dumbell.mp4" muted loop autoplay></video>

        <div class="overlay"></div>

        <div class="text">
            <h2><?php echo $lang['join-td'] ?></h2>
            <br>
            <ul>
                <li><?php echo $lang['mem-1'] ?></li>
                <li><?php echo $lang['mem-2'] ?></li>
                <li><?php echo $lang['mem-3'] ?></li>
                <li><?php echo $lang['mem-4'] ?></li>
                <li><?php echo $lang['mem-5'] ?></li>
            </ul>
            <a href="training.php"><?php echo $lang['explore-train'] ?></a>

<!--            <ul class="social">-->
<!--                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-instagram"></i></a></li>-->
<!--                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>-->
<!--            </ul>-->
        </div>
    </section>

<!--    <div class="menu">-->
<!--        <ul>-->
<!--            <li><a href="#">Home</a></li>-->
<!--            <li><a href="#">News</a></li>-->
<!--            <li><a href="#">Destination</a></li>-->
<!--            <li><a href="#">Blog</a></li>-->
<!--            <li><a href="#">Contact</a></li>-->
<!--        </ul>-->
<!--    </div>-->


</body>
</html>

<?php include '../view/footer.php';?>




