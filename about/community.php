<?php
require '../config.php';
include '../view/web-head.php' ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="comm.css">
    <link rel="stylesheet" href="../styles/normalize.css">
</head>
    <body>
    <div class="container">
        <div class="galleryContainer">
            <h1><?php echo $lang["community"] ?></h1>
            <div class="gallery">
                <input type="radio" name="controls"  id="c1" checked>
                <img src="../resources/images/community-pics/in-our-community-1.jpg" alt="" id="i1" class="galleryImage">
<!--                <div class="centered">Centered</div>-->
                <input type="radio" name="controls"  id="c2" checked>
                <img src="../resources/images/community-pics/in-our-community-2.jpg" alt="" id="i2" class="galleryImage">
                <input type="radio" name="controls"  id="c3" checked>
                <img src="../resources/images/community-pics/in-our-community-3.jpg" alt="" id="i3" class="galleryImage">
            </div>

            <div class="thumbnails">
                <label  class="thumbnailImage" for="c1">
                    <img src="../resources/images/community-pics/in-our-community-1.jpg">
                </label>
                <label  class="thumbnailImage" for="c2">
                    <img src="../resources/images/community-pics/in-our-community-2.jpg">
                </label>
                <label  class="thumbnailImage" for="c3">
                    <img src="../resources/images/community-pics/in-our-community-3.jpg">
                </label>
            </div>

            <div class="events">
                <ul>
                    <li><?php echo $lang["charity"] ?></li>
                    <li><?php echo $lang["kayak"] ?></li>
                    <li><?php echo $lang["bazaar"] ?></li>
                    <li><?php echo $lang["donation"] ?></li>
                    <li><?php echo $lang["festival"] ?></li>
                </ul>
                <ul>
                    <li><?php echo $lang["run"] ?></li>
                    <li><?php echo $lang["ringette"] ?></li>
                    <li><?php echo $lang["hockey"] ?></li>
                    <li><?php echo $lang["wine"] ?></li>
                    <li><?php echo $lang["cure"] ?></li>
                    <li><?php echo $lang["basketball"] ?></li>
                </ul>
            </div>

        </div>
    </div>
    </body>
</html>

<?php include '../view/web-foot.php';?>