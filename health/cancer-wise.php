<?php
require "../config.php";
include '../view/head.php' ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="cancer.css">
    <link rel="stylesheet" href="../styles/normalize.css">
</head>
<body>
    <div id="header" class="bg-light text-center">
        <div class="container container--narrow">
            <h1><?php echo $lang["cancer"] ?></h1>
            <br>
            <p><?php echo $lang["cancer-desc"] ?></p>
        </div>
    </div>

        <div class="time">
            <h3><?php echo $lang["time"] ?></h3>
            <h4><?php echo $lang["time"] ?></h4>
        </div>

    <section>
        <div class="container">
        <h2 class="text-center"><?php echo $lang["before"] ?></h2>
        <div class="split">
            <div>
                <p><?php echo $lang["hist"] ?></p>
            </div>
            <div>
                <p><?php echo $lang["meds"] ?></p>
            </div>
        </div>
        </div>
    </section>

    <section class="bg-dark">
        <div class="container">
        <div class="split">
            <div>
                <h2><?php echo $lang["phys-asess"] ?></h2>
                <p><?php echo $lang["appt"] ?></p>
                <ul>
                    <li><?php echo $lang["assess-1"] ?></li>
                    <li><?php echo $lang["assess-2"] ?></li>
                    <li><?php echo $lang["assess-3"] ?></li>
                    <li><?php echo $lang["assess-4"] ?></li>
                    <li><?php echo $lang["assess-5"] ?></li>
                </ul>
            </div>
            <div>
                <img src="../resources/images/stock-photos/bandtherapy-karolina-grabowska.jpg" alt="" style="max-height: 425px">
            </div>
        </div>
        </div>
    </section>

    <section class="bg-primary">
        <div class="container">
        <div class="split">
            <div>
                <img src="../resources/images/stock-photos/heartrate-lorenzo.jpg" alt="">
            </div>
            <div>
                <h2><?php echo $lang["kin-asess"] ?></h2>
                <p><?php echo $lang["kin-appt"] ?></p>
                <ul>
                    <li><?php echo $lang["kassess-1"] ?></li>
                    <li><?php echo $lang["kassess-2"] ?></li>
                    <li><?php echo $lang["kassess-3"] ?></li>
                    <li><?php echo $lang["kassess-4"] ?></li>
                    <li><?php echo $lang["kassess-5"] ?></li>
                </ul>
            </div>
        </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h2 class="text-center"><?php echo $lang["treat-process"] ?></h2>
            <div class="split">
                <div>
                    <p><?php echo $lang["process1"] ?></div>
                <div>
                    <p><?php echo $lang["process2"] ?></div>
            </div>
        </div>
    </section>
</body>
</html>
<?php include '../view/footer.php'?>