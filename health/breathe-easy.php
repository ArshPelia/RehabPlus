<?php
require "../config.php";
include '../view/head.php'?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/normalize.css">
    <link rel="stylesheet" href="breathe.css">
</head>
<body>

    <section class="banner">
        <img src="../resources/images/stock-photos/lungs-xray-anna-shvets.jpg" alt="" class="fitBg">
        <div class="content">
            <h2><?php echo $lang["breathe"] ?></h2>
            <p><?php echo $lang["achieve"] ?></p>
            <a href="#" class="learn-btn" target="_prog">Learn More</a>
        </div>
    </section>

    <section class="abt">
        <div class="contentBx">
            <h2 class="titleText" id="_prog"><?php echo $lang["program"] ?></h2>
            <p class="text"><?php echo $lang["program-text"] ?></p>
<!--            <a href="#" class="learn-btn">Learn More</a>-->
        </div>
        <div class="imgBx">
            <img src="../resources/images/stock-photos/cardiotest-cottonbro.jpg" alt="" class="fitBg yel">
        </div>
    </section>
<!---->
<!--    <section class="banner2">-->
<!--        <img src="../resources/images/stock-photos/needles.jpg" alt="" class="fitBg">-->
<!--    </section>-->

    <section class="when">
        <h3><?php echo $lang["time"] ?></h3>
        <h5><?php echo $lang["time2"] ?></h5>
    </section>

    <section class="benefits">
        <div class="content2">
            <h2 class="titleText"><?php echo $lang["ben-title"] ?> </h2>
            <div class="border"></div>
            <p class="text"><?php echo $lang["ben-text"] ?></p>
        </div>
        <div class="benefitList">

            <div class="box">
                <div class="imgBx">
                    <img src="../resources/images/stock-photos/deadlift-victor-freitas.jpg" alt="" class="fitBg">
                </div>
                <div class="content">
                    <h2><?php echo $lang["ben1"] ?><br><span><?php echo $lang["ben1-2"] ?></span></h2>
                </div>
            </div>

            <div class="box">
                <div class="imgBx">
                    <img src="../resources/images/stock-photos/running-andrea-piacquadio.jpg" alt="" class="fitBg">
                </div>
                <div class="content">
                    <h2><?php echo $lang["ben2"] ?><br><span><?php echo $lang["ben2-2"] ?></span></h2>
                </div>
            </div>

            <div class="box">
                <div class="imgBx">
                    <img src="../resources/images/stock-photos/joy-bekka-mongeau.jpg" alt="" class="fitBg">
                </div>
                <div class="content">
                    <h2><?php echo $lang["ben3"] ?><br><span><?php echo $lang["ben3-2"] ?></span></h2>
                </div>
            </div>
        </div>
<!--        <a href="#">View More</a>-->
    </section>

    <section class="abt">
        <div class="imgBx">
            <img src="../resources/images/stock-photos/massage-karolina-grabowska.jpg" alt="" class="fitBg">
        </div>
        <div class="contentBx">
            <h2 class="titleText" id="abt2"><?php echo $lang["breath-expect"] ?></h2>
            <p class="text" id="abt2"><?php echo $lang["breath-expect-text"] ?></p>
<!--            <a href="#" class="learn-btn">Learn More</a>-->
        </div>

    </section>
</body>
</html>

<?php include '../view/footer.php'?>
