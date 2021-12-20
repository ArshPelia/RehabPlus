<?php
require "../config.php";
include '../view/head.php' ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rehab Plus</title>
    <link rel="stylesheet" href="train.css">
    <link rel="stylesheet" href="../styles/normalize.css">
    <script src="../js/scroll.js"></script>
</head>
<body>


    <div class="parallax1">
        <div class="heading">
            <?php echo $lang['train-title'] ?>
        </div>
    </div>

    <section class="group">
        <h1> <?php echo $lang['group'] ?></h1>
        <h3><?php echo $lang['max'] ?></h3>
        <div class="two-col">
            <p> <?php echo $lang['group-text'] ?></p>
        </div>
        <div class="two-col">
            <p><?php echo $lang['supervise'] ?>


            </p>
        </div>
    </section>

    <div class="parallax2">
        <div class="heading-sm">
            <?php echo $lang['callus'] ?>
        </div>
    </div>

    <section class="dark">
        <h2> <?php echo $lang['personal'] ?></h2>
        <p> <?php echo $lang['personal-text'] ?></p>
    </section>

    <div class="parallax3">
    </div>

    <div class="dark">
        <h2> <?php echo $lang['dryland'] ?></h2>
        <div class="two-col">
            <p> <?php echo $lang['dryland-text'] ?></p>
        </div>
        <div class="two-col">
            <p> <?php echo $lang['dryland-text2'] ?></p>
        </div>
    </div>

    <div class="parallax4">
    </div>

</body>
</html>

<?php include '../view/footer.php' ?>

