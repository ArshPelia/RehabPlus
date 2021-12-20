<?php //include "config.php";?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../rehabplus/styles/foot.css">
    <link rel="stylesheet" href="../../rehabplus/styles/normalize.css">
    <script src="https://kit.fontawesome.com/feb30e64e7.js" crossorigin="anonymous"></script>
</head>
<footer class="footer">
    <div class="footer-left">
        <h3>REHAB<span>Plus</span><sup>+</sup></h3>
        <div class="footer-links">
            <a href="../index.php" class="link1"><?php echo $lang['home'] ?></a>
            <a href="../../rehabplus/fitness/membership.php" class="link2"><?php echo $lang['Membership'] ?></a>
            <a href="../../rehabplus/physiotherapy/index.php" class="link3"><?php echo $lang['physio'] ?></a>
            <a href="../../rehabplus/fitness/classes.php" class="link4"><?php echo $lang['classes'] ?></a>
            <a href="../../rehabplus/health/senior-wellness.php" class="link5"><?php echo $lang['health'] ?></a>
<!--            <a href="../../rehabplus/health/senior-wellness.php" class="link6">--><?php //echo $lang['home'] ?><!--</a>-->
        </div>

        <!--          <p class="footer-company">-->
        <!--            Company Name @ 2020-->
        <!--          </p>-->
        <div class="sec hours">

            <table>
                <tr>
                    <th><?php echo $lang['week'] ?>:</th>
                    <td>6:00am - 9:00pm <td>
                </tr>
                <tr>
                    <th><?php echo $lang['sat'] ?>:</th>
                    <td>8:00am - 4:00pm </td>
                </tr>
                <tr>
                    <th><?php echo $lang['sun'] ?>:</th>
                    <td>8:00am - 4:00pm </td>
                </tr>
            </table>
        </div>
    </div>

    <div class="footer-center">
        <div>
            <i class="fa fa-map-marker"></i>
            <p><span>181 Dale Avenue</span> Timmins, ON</p>
        </div>
        <div>
            <i class="fa fa-phone"></i>
            <p><a href="tel:7052644050">(+1) 705 264-4050</a></p>
        </div>
        <div>
            <i class="fa fa-fax"></i>
            <p><a href="tel:7052642311">(+1) 705 264-2311</a></p>
        </div>
        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:info@rehab.plus">info@rehab.plus</a></p>
        </div>
    </div>
    <div class="footer-right">
        <p class="footer-company-about">
            <span><?php echo $lang['abt'] ?></span>
            <?php echo $lang['abt-text'] ?>
        </p>

        <div class="footer-social">
            <a href="https://www.facebook.com/Rehab-Plus-465943980132291/"><i class="fa fa-facebook"></i></a>
            <a href="https://www.instagram.com/rehabplusfitness/?hl=en"><i class="fa fa-instagram"></i></a>
<!--            <a href="#"><i class="fa fa-twitter"></i></a>-->
            <!--            <a href="#"><i class="fa fa-facebook"></i></a>-->
        </div>
    </div>
</footer>
</html>