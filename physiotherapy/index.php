<?php
require "../config.php";
include '../view/web-head.php' ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="physio.css">
    <link rel="stylesheet" href="../styles/normalize.css">
    <script src="https://kit.fontawesome.com/feb30e64e7.js" crossorigin="anonymous"></script>
</head>
<body>
    <section>
        <h1><?php echo $lang['phys-what'] ?></h1>
        <p><?php echo $lang['phys-desc'] ?></p>
        <h1><?php echo $lang['phys-role'] ?></h1>
        <p><?php echo $lang['phys-role-desc'] ?></p><br>

        <p> <?php echo $lang['our-phys'] ?></p> <br>

    </section>

    <h1 style="text-align: center; margin: 0;"><?php echo $lang['offer'] ?></h1>
    <div class="border"></div>

    <div class="services-section">
        <div class="inner-width">
            <h1><?php echo $lang['alt-treat'] ?></h1>
            <div class="border"></div>
            <div class="services-container">

                <div class="service-box">
                    <div class="service-icon">
                        <i class="fas fa-bone"></i>
                    </div>
                    <div class="section-title"><?php echo $lang['alt1'] ?></div>
                    <!--                    <div class="service-desc">-->
                    <!--                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae dolorem ex laboriosam sunt tempora.-->
                    <!--                    </div>-->
                </div>

                <div class="service-box">
                    <div class="service-icon">
                        <i class="fas fa-file-medical-alt"></i>
                    </div>
                    <div class="section-title"><?php echo $lang['alt2'] ?></div>
                    <!--                    <div class="service-desc">-->
                    <!--                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae dolorem ex laboriosam sunt tempora.-->
                    <!--                    </div>-->
                </div>

                <div class="service-box">
                    <div class="service-icon">
                        <i class="fas fa-band-aid"></i>
                    </div>
                    <div class="section-title"><?php echo $lang['alt3'] ?></div>
                    <!--                    <div class="service-desc">-->
                    <!--                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae dolorem ex laboriosam sunt tempora.-->
                    <!--                    </div>-->
                </div>

                <div class="service-box">
                    <div class="service-icon">
                        <i class="fas fa-dumbbell"></i>
                    </div>
                    <div class="section-title"> <?php echo $lang['alt4'] ?></div>
                    <!--                    <div class="service-desc">-->
                    <!--                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae dolorem ex laboriosam sunt tempora.-->
                    <!--                    </div>-->
                </div>

                <div class="service-box">
                    <div class="service-icon">
                        <i class="fas fa-x-ray"></i>
                    </div>
                    <div class="section-title"><?php echo $lang['alt5'] ?></div>
                    <!--                    <div class="service-desc">-->
                    <!--                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae dolorem ex laboriosam sunt tempora.-->
                    <!--                    </div>-->
                </div>

                <div class="service-box">
                    <div class="service-icon">
                        <i class="fas fa-medkit"></i>
                    </div>
                    <div class="section-title"><?php echo $lang['alt6'] ?></div>
                    <!--                    <div class="service-desc">-->
                    <!--                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae dolorem ex laboriosam sunt tempora.-->
                    <!--                    </div>-->
                </div>
            </div>
        </div>
    </div>

    <section id="ensure" >
        <h1 ><?php echo $lang['best'] ?></h1>
        <p><?php echo $lang['best-desc'] ?></p>
    </section>

    <br>

    <h1 style="text-align: center; margin: 0;">Specialized Services</h1>
    <div class="border"></div>

    <div class="wrapper">
        <div class="box">
            <div class="front-face">
                <div class="icon"><i class="fas fa-low-vision"></i></div>
                <span><?php echo $lang['vest'] ?></span>
            </div>
            <div class="back-face">
                <span><?php echo $lang['vest'] ?></span>
                <p><?php echo $lang['vest-desc'] ?>
                    <br>
                    <?php echo $lang['vest-desc2'] ?>
                </p>
            </div>
        </div>

        <div class="box" id="needle">
            <div class="front-face">
                <div class="icon"><i class="fas fa-file-medical-alt"></i></div>
                <span><?php echo $lang['needle'] ?></span>
            </div>
            <div class="back-face">
                <span><?php echo $lang['needle'] ?></span>
                <p>
                <?php echo $lang['needle-desc'] ?></div>
        </div>

        <div class="box">
            <div class="front-face">
                <div class="icon"><i class="fas fa-utensils"></i></div>
                <span>Pelvic Health</span>
            </div>
            <div class="back-face">
                <span>Pelvic Health</span>
                <p><?php echo $lang['pelv-desc'] ?> </p>
            </div>
        </div>
    </div>

    <br>


</body>
</html>

<?php include'../view/web-foot.php' ?>
