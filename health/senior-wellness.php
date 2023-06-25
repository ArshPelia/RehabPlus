<?php
require "../config.php";
include '../view/web-head.php' ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="senior.css">
    <script src="https://kit.fontawesome.com/feb30e64e7.js" crossorigin="anonymous"></script>
</head>
<body>
    <section class="banner-area">
        <div class="banner-img"></div>
        <h1><?php echo $lang["senior"] ?></h1>
        <h3>Get In Shape Today!</h3>
        <a href="#" class="banner-btn" target="about"> Learn More</a>
<!--        <h4>For Seniors (60+) looking to get into great shape, but do not know where to start.</h4>-->
    </section>


    <section class="about-area" id="about">
        <h3 class="section-title"><?php echo $lang["what"] ?></h3>
        <ul class="about-content">
            <li class="about-left"></li>
            <li class="about-right">
<!--                <h2>About our Company</h2>-->
                <p><?php echo $lang["senior-desc"] ?>
                    <br>
                    <?php echo $lang["senior-desc2"] ?> </p>

                <a href="#" class="about-btn">Contact Us</a>
            </li>
        </ul>
    </section>


    <section class="services-ares" id="services">
        <h3 class="section-title"><?php echo $lang["includes"] ?></h3>
        <ul class="services-content">
            <li>
                <i class="fa fa-laptop"></i>
                <h4><?php echo $lang["body"] ?></h4>
<!--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, nisi?</p>-->
            </li>
            <li>
                <i class="fa fa-signal"></i>
                <h4><?php echo $lang["fitness-ass"] ?></h4>
<!--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, nisi?</p>-->
            </li>
            <li>
                <i class="fa fa-picture-o"></i>
                <h4><?php echo $lang["fit-plan"] ?></h4>
<!--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, nisi?</p>-->
            </li>
        </ul>
    </section>
</body>
</html>
<?php include '../view/web-foot.php'?>