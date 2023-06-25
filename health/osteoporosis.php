<?php
require "../config.php";
include "../view/web-head.php"; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rehab Plus</title>
    <link rel="stylesheet" href="osteo.css">
</head>
<body>
<h1 id="title"><?php echo $lang["osteo"] ?></h1>
<div class="section-container">
    <div class="columns image" style="background-image: url('../resources/images/stock-photos/hand-xray-tara-winstead.jpg')">
        &nbsp;
    </div>

    <div class="columns content">
        <div class="content-container">
            <h5><?php echo $lang["what"] ?></h5>
            <div class="border"></div>
            <p><?php echo $lang["what-about"] ?></p>

        </div>
    </div>
</div>

<div class="section-container">

    <div class="columns content">
        <div class="content-container">
            <h5><?php echo $lang["program"] ?></h5>
            <div class="border"></div>
            <p><?php echo $lang["prog-desc"] ?></p>
            <p><?php echo $lang["prog-desc2"] ?></p>

        </div>
    </div>

    <div class="columns image" style="background-image: url('../resources/images/stock-photos/workout-equipment-mikhail-nilov.jpg')">
        &nbsp;
    </div>

</div>

</body>
</html>

<?php include "../view/web-foot.php"; ?>