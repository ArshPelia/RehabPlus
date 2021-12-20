<?php
require '../config.php';
include '../view/head.php' ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="hire.css">
    <link rel="stylesheet" href="../styles/normalize.css">
</head>
<body>

<!--    Header  -->
    <div id="showcase" class="grid">
        <div class="bg-image"></div>
        <div class="content-wrap">
            <h1><?php echo $lang["employ"] ?></h1>
            <p><?php echo $lang["equip"] ?></p>
            <a href="#section-b" class="btn"><?php echo $lang["read"] ?></a>
        </div>
    </div>

<!--    Main    -->
    <main>
<!--        SECTION A       -->
        <section id="section-a" class="grid">
            <div class="content-wrap">
                <h2 class="content-title"><?php echo $lang["test"] ?></h2>
                <div class="content-text">
                    <p><?php echo $lang["test1"] ?></p>

                    <strong><?php echo $lang["link"] ?></strong>
                </div>
            </div>
        </section>

        <!--        SECTION B       -->
        <section id="section-b" class="grid">
            <ul>
                <li>
                    <div class="card">
                        <img src="../resources/images/stock-photos/paperwork-pixabay.jpg" alt="">
                        <div class="card-content">
                            <h3 class="card-title"><?php echo $lang["post"] ?></h3>
                            <p><?php echo $lang["post1"] ?></p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="card">
                        <img src="../resources/images/stock-photos/exam-pixabay.jpg" alt="">
                        <div class="card-content">
                            <h3 class="card-title"><?php echo $lang["occ"] ?></h3>
                            <p><?php echo $lang["occ1"] ?></p>
                        </div>
                    </div>
                </li>

<!--                <li>-->
<!--                    <div class="card">-->
<!--                        <img src="../resources/images/stock-photos/outdoor-training.jpg" alt="">-->
<!--                        <div class="card-content">-->
<!--                            <h3 class="card-title">Laboratory or Medical Tests</h3>-->
<!--                            <p>Hearing test(interpreted by an accredited audiologist.), Chest x-rays (interpreted by an-->
<!--                                accredited radiologist.), A five-panel drug abuse screen through urine sample performed-->
<!--                                at an accredited lab.-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </li>-->
            </ul>
        </section>

<!--        SECTION C   -->
        <section id="section-c" class="grid">
            <div class="content-wrap">
                <h2 class="content-title"><?php echo $lang["please"] ?></h2>
                <p><?php echo $lang["report-req"] ?></p>
            </div>
        </section>

<!--        SECTION D   -->
        <section id="section-d" class="grid">
            <div class="box">
                <h2 class="content-title"><?php echo $lang["ergo"] ?></h2>
                <p><?php echo $lang["ergo1"] ?></p>
                <p>contact@rehab.plus</p>
            </div>

            <div class="box">
                <h2 class="content-title"><?php echo $lang["ergo2"] ?></h2>
                <p><?php echo $lang["ergo3"] ?></p>
                <ul>
                    <li><?php echo $lang["ergo-list-1"] ?></li>
                    <li><?php echo $lang["ergo-list-2"] ?></li>                    <li>High material waste is produced</li>
                    <li><?php echo $lang["ergo-list-3"] ?></li>                    <li>Employees complain about job requirements</li>
                    <li><?php echo $lang["ergo-list-4"] ?></li>
                    <li><?php echo $lang["ergo-list-5"] ?></li>
                    <li><?php echo $lang["ergo-list-6"] ?></li>
                    <li><?php echo $lang["ergo-list-7"] ?></li>
                </ul>
            </div>
        </section>
    </main>

<!--    FOOTER  -->

<!--<footer id="main-footer" class="grid">-->
<!--    <div>Rehab Plus</div>-->
<!--    <div>Project By: Arsh</div>-->
<!--</footer>-->
</body>
</html>

<?php include '../view/footer.php' ?>