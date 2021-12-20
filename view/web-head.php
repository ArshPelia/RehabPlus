<?php //include "config.php";?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rehab Plus</title>
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="../styles/nav.css" rel="stylesheet">
    <!--  <script src="../js/scroll.js"></script>-->
</head>
<!--Nav markup goes here-->
<header>
    <div class="selector">
        <!--        <label for="langselector" ID="lang">LANGUAGE / LANGUE : </label>-->
        <a href="../index.php?lang=en"><?php echo $lang['lang_en'] ?></a>
        | <a href="../index.php?lang=fr"><?php echo $lang['lang_fr'] ?></a>
    </div>
    <div class="title">
        <a href="../index.php" style="text-decoration: none"><h1><span>REHABPLUS</span><sup>+</sup></h1></a>
    </div>
    <div class="container-head">
        <nav>
            <div class="menu-icons">
                <i class="icon ion-md-menu"></i>
                <i class="icon ion-md-close"></i>
            </div>
            <a href="#" class="logo" style="display: none">
                <!--          <i class="icon ion-md-fitness"></i>-->
            </a>
            <ul class="nav-list">
                <li><a href="../index.php"><?php echo $lang['home'] ?></a></li>

                <li><a style="cursor:default;"><?php echo $lang['fitness'] ?>
                        <i class="icon ion-md-arrow-dropdown"></i>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="../fitness/membership.php"><?php echo $lang['Membership'] ?></a></li>
                        <li><a href="../fitness/training.php"><?php echo $lang['Training'] ?></a></li>
                        <li><a href="../fitness/classes.php"><?php echo $lang['classes'] ?></a></li>
                    </ul>
                </li>

                <li><a style="cursor: default"><?php echo $lang['health'] ?>
                        <i class="icon ion-md-arrow-dropdown"></i>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="../health/cancer-wise.php"><?php echo $lang['cancer'] ?></a></li>
                        <li><a href="../health/cardiac-rehab.php"><?php echo $lang['cardiac'] ?></a></li>
                        <li><a href="../health/senior-wellness.php"><?php echo $lang['senior'] ?></a></li>
                        <li><a href="../health/breathe-easy.php"><?php echo $lang['breathe'] ?></a></li>
                        <li><a href="../health/massage.php"><?php echo $lang['massage'] ?></a></li>
                        <li><a href="../health/osteoporosis.php"><?php echo $lang['osteo'] ?></a></li>
                    </ul>
                </li>

                <li><a style="cursor: default"><?php echo $lang['physio'] ?>
                        <i class="icon ion-md-arrow-dropdown"></i>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="../physiotherapy/index.php"><?php echo $lang['treatment'] ?></a></li>
                        <li><a href="../physiotherapy/acupuncture.php"><?php echo $lang['acup'] ?></a></li>
                        <li><a href="../physiotherapy/pilates.php"><?php echo $lang['pilates'] ?></a></li>
                    </ul>
                </li>

                <li><a style="cursor: default"><?php echo $lang['rehab'] ?>
                        <i class="icon ion-md-arrow-dropdown"></i>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="../rehab/index.php"><?php echo $lang['treatment'] ?></a></li>
                        <li><a href="../rehab/surehire.php"><?php echo $lang['employ'] ?></a></li>
                        <!--                        <li><a href="#">Hand Therapy</a></li>-->
                    </ul>
                </li>

                <li>
                    <a style="cursor:default;"><?php echo $lang['about'] ?>
                        <i class="icon ion-md-arrow-dropdown"></i>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="../about/team.php"><?php echo $lang['team'] ?></a></li>
                        <li><a href="../about/facility.php"><?php echo $lang['facility'] ?></a></li>
                        <li><a href="../about/community.php"><?php echo $lang['community'] ?></a></li>
                        <li><a href="../about/covid.php"><?php echo $lang['covid'] ?></a></li>
                    </ul>
                </li>

                <li class="move-right btn">
                    <a href="https://www.wellnessliving.com/login/rehab_plus_rehabilitation_and_fitness">Wellness Living</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
<!--End nav-->

<!--Hero-->
<!--<section class="hero">-->
<!--  <div class="text">-->
<!--    <h2>Proudly serving</h2>-->
<!--    <h1>Delicious Food Daily</h1>-->
<!--    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>-->
<!--    <a href="#" class="btn">Learn more</a>-->
<!--  </div>-->
<!--</section>-->
<script >
    //Create function to select elements

    const selectElement = (element) => document.querySelector(element);

    //Open and close nav on click
    selectElement('.menu-icons').addEventListener('click', () =>{
        selectElement('nav').classList.toggle('active');
    });
</script>

</html>


<!--



-->