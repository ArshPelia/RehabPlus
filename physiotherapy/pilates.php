<?php
require "../config.php";
include '../view/web-head.php' ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Training</title>
    <link rel="stylesheet" href="pilates.css">
    <script src="../js/scroll.js"></script>
</head>
<body>
<div class="parallax1">
    <div class="heading">
        <h1>Pilates</h1>
    </div>
</div>

<section>
    <h1>Service Overview</h1>
<!--    <h3>Maximize your Fitness Goals Together</h3>-->
    <div class="two-col">
        <p><?php echo $lang["pil1"] ?></p>
    </div>
    <div class="two-col">
        <p><?php echo $lang["pil2"] ?></p>
    </div>
</section>

<div class="parallax2">
    <div class="heading-sm">
        <?php echo $lang["interested"] ?>
    </div>
</div>

<section class="dark">
    <h2><?php echo $lang["baby"] ?></h2>
    <p><?php echo $lang["baby-desc"] ?></p>
</section>

<div class="parallax3">
</div>

<div class="dark">
    <h2>Therapeutic Classes </h2>
    <div class="two-col">
        <p><?php echo $lang["thera"] ?></p>
    </div>
    <div class="two-col">
        <p><?php echo $lang["begin"] ?></p>

    </div>
</div>


<div class="parallax4">
    <div id="benefits"><?php echo $lang["taught"] ?></div>
</div>

</body>
</html>

<?php include '../view/web-foot.php'?>

