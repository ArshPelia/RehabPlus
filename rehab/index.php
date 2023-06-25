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
    <link rel="stylesheet" href="ot.css">
</head>
<body>

</body>
</html>
<div class="outer">
    <h1><?php echo $lang["industry"] ?></h1>
    <article>
        <h2><?php echo $lang["func"] ?></h2> <!--       work with the best-->
        <section>
            <p><?php echo $lang["func1"] ?></p>
            <p> <?php echo $lang["func2"] ?></p>

            <img src="../resources/images/stock-photos/welding-pixabay.jpg" alt="Computer keyboard">

            <h3><?php echo $lang["work"] ?></h3>

            <p><?php echo $lang["work1"] ?></p>

            <ul>
                <li><?php echo $lang["list1"] ?></li>
                <li><?php echo $lang["list2"] ?></li>
                <li><?php echo $lang["list3"] ?></li>
                <li><?php echo $lang["list4"] ?></li>
                <li><?php echo $lang["list5"] ?></li>
                <li><?php echo $lang["list6"] ?></li>
            </ul>
            <img src="../resources/images/stock-photos/firefighter-pixabay.jpg" alt="Computer keyboard">


        </section>

        <h2 class="secondary"><?php echo $lang["phys"] ?></h2>

        <section>

            <p><?php echo $lang["phys2"] ?></p>
            <p><?php echo $lang["phys3"] ?></p>

            <img src="../resources/images/stock-photos/ankle-rehab.jpg" alt="">

            <h3> The Road to recovery is only one click away!</h3>

            <p><?php echo $lang["report"] ?></p>


            <p class="span-all"> In essence, a Physical Demands Analysis is the “cornerstone” of the analytical process
                used to determine compatibility between a worker and a specific job.</p>
            <p class="span-all"><img src="../resources/images/gym-photos/2ndfloor-railing.jpg" alt=""></p>

<!--            <p>voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint-->
<!--                occaecat cupidatat non proident, sunt in culpa qui officia-->
<!--                deserunt mollit anim id est laborum. </p>-->
<!---->
<!--            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,-->
<!--                sed do eiusmod tempor incididunt ut labore et dolore magna-->
<!--                aliqua.</p>-->
<!---->
<!--            <p>Ut enim ad minim veniam, quis nostrud exercitation-->
<!--                ullamco laboris nisi ut aliquip ex ea commodo consequat.-->
<!--                Duis aute irure dolor in reprehenderit in voluptate velit-->
<!--                esse cillum dolore eu fugiat nulla pariatur. </p>-->
        </section>
    </article>
</div>
<?php include '../view/web-foot.php'?>