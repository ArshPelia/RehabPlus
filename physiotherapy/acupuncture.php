<?php
require "../config.php";
include "../view/head.php"; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rehab Plus</title>
    <link rel="stylesheet" href="acupunc.css">
</head>
<body>
    <h1 id="title"><?php echo $lang['acup'] ?></h1>
    <div class="border"></div>

    <div class="section-container">
        <div class="columns image" style="background-image: url('../resources/images/stock-photos/acupunc-maksim-goncharenok.jpg')">
            &nbsp;
        </div>

        <div class="columns content">
            <div class="content-container">
                <h5><?php echo $lang['acu-what'] ?> </h5>
                <div class="border"></div>
                <p><?php echo $lang['acu-what-desc'] ?></p>

                <p><?php echo $lang['acu-what-desc2'] ?></p>

            </div>
        </div>
    </div>

    <div class="section-container">

        <div class="columns content">
            <div class="content-container">
                <h5><?php echo $lang['acu-why'] ?></h5>
                <div class="border"></div>
                <p><?php echo $lang['acu-why-desc'] ?></p>
                <p><?php echo $lang['acu-why-desc2'] ?> </p>
            </div>
        </div>

        <div class="columns image" style="background-image: url('../resources/images/stock-photos/acupunc2-ryutaro-tsukata.jpg')">
            &nbsp;
        </div>

    </div>

</body>
</html>

<?php include "../view/footer.php"; ?>