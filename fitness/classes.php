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
    <link rel="stylesheet" href="vir-classes.css">
    <link rel="stylesheet" href="../styles/normalize.css">
    <script src="https://kit.fontawesome.com/feb30e64e7.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="intro-text">
    <h1 id="title"><?php echo $lang['wellness'] ?></h1>
    <p><?php echo $lang['well-desc'] ?></p>
        <button><a href="https://www.wellnessliving.com/login/rehab_plus_rehabilitation_and_fitness">Sign-In</a></button>
    </div>

    <div id="sched">
        <figure>
            <figcaption>
                Summer 2021 Virtual Fitness Schedule
            </figcaption>
        </figure>
        <img id="myImg" alt="Virtual Schedule" src="../resources/images/may-schedule.png">
        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- The Close Button -->
            <span class="close">&times;</span>

            <!-- Modal Content (The Image) -->
            <img class="modal-content" id="img01">

            <!-- Modal Caption (Image Text) -->
            <div id="caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, sed.</div>
        </div>
        <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("myImg");
            var modalImg = document.getElementById("img01");
            var captionText = document.getElementById("caption");
            img.onclick = function(){
                modal.style.display = "block";
                modalImg.src = this.src;
                captionText.innerHTML = this.alt;
            }

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }
        </script>
    </div>

    <div class="box-area">
<!--        <div class="single-box">-->
<!--            <div class="img-area"></div>-->
<!--                <div class="img-text">-->
<!--                    <span class="header-text"><strong>Barbell Blast</strong></span>-->
<!--                    <p>Work it with this full body class. Using a barbell to mix things up, this class will strengthen-->
<!--                        and tone your full body. Great for beginners and experts alike.</p>-->
<!--                </div>-->
<!--            </div>-->


        <div class="single-box">
            <div class="img-area"></div>
                <div class="img-text">
                    <span class="header-text"><strong><?php echo $lang['body-weight'] ?></strong></span>
                    <p><?php echo $lang['body-weight-desc'] ?></p>
                </div>
            <div class="teacher">
                <p><strong>Instructor: Ben </strong></p>
            </div>
        </div>

<!--        <div class="single-box">-->
<!--            <div class="img-area"></div>-->
<!--            <div class="img-text">-->
<!--                <span class="header-text"><strong>Circuit Training</strong></span>-->
<!--                <p>If you’re looking for a high intensity workout this is a great class to attend. It is a high-->
<!--                    energy and fast-paced class that involves working your way around different exercise stations-->
<!--                    in a set amount of time.</p>-->
<!--            </div>-->
<!--        </div>-->

        <div class="single-box">
            <div class="img-area"></div>
            <div class="img-text">
                <span class="header-text"><strong><?php echo $lang['cardio'] ?></strong></span>
                <p><?php echo $lang['cardio1'] ?></p>
            </div>
            <div class="teacher">
                <p><strong>Instructor: Jane </strong></p>
            </div>
        </div>

        <div class="single-box">
            <div class="img-area"></div>
            <div class="img-text">
                <span class="header-text"><strong><?php echo $lang['core'] ?></strong></span>
                <p><?php echo $lang['core1'] ?></p>
            </div>
            <div class="teacher">
                <p><strong>Instructor: Ben </strong></p>
            </div>
        </div>

<!--        <div class="single-box">-->
<!--            <div class="img-area"></div>-->
<!--            <div class="img-text">-->
<!--                <span class="header-text"><strong>Core Yoga</strong></span>-->
<!--                <p>This Yoga class places extra emphasis onto the core region. Building strength and stability-->
<!--                    throughout your stomach, glutes and lower back. </p>-->
<!--            </div>-->
<!--        </div>-->

        <div class="single-box">
            <div class="img-area"></div>
            <div class="img-text">
                <span class="header-text"><strong><?php echo $lang['forever'] ?></strong></span>
                <p><?php echo $lang['forever1'] ?></p>
            </div>
            <div class="teacher">
                <p><strong>Instructor: Marcie</strong></p>
            </div>
        </div>

        <div class="single-box">
            <div class="img-area"></div>
            <div class="img-text">
                <span class="header-text"><strong><?php echo $lang['high'] ?></strong></span>
                <p><?php echo $lang['high1'] ?></p>
            </div>
            <div class="teacher">
                <p><strong>Instructor: Ben </strong></p>
            </div>
        </div>

        <div class="single-box">
            <div class="img-area"></div>
            <div class="img-text">
                <span class="header-text"><strong><?php echo $lang['intro-yoga'] ?></strong></span>
                <p><?php echo $lang['intro-yoga1'] ?></p>
            </div>
            <div class="teacher">
                <p><strong>Instructor: Ben </strong></p>
            </div>
        </div>

<!--        <div class="single-box">-->
<!--            <div class="img-area"></div>-->
<!--            <div class="img-text">-->
<!--                <span class="header-text"><strong>Physio Pilates </strong></span>-->
<!--                <p>This class is designed for those who are suffering from a neck or low back injury. There is increased-->
<!--                    supervision and instruction for the exercises to ensure safe and effective technique. </p>-->
<!--            </div>-->
<!--        </div>-->

        <div class="single-box">
            <div class="img-area"></div>
            <div class="img-text">
                <span class="header-text"><strong><?php echo $lang['pilates'] ?></strong></span>
                <p><?php echo $lang['pilates1'] ?></p>
            </div>
            <div class="teacher">
                <p><strong>Instructor: Marcie</strong></p>
            </div>
        </div>

<!--        <div class="single-box">-->
<!--            <div class="img-area"></div>-->
<!--            <div class="img-text">-->
<!--                <span class="header-text"><strong>Piloxing</strong></span>-->
<!--                <p>a non-stop, high-energy interval workout of a creative mix between Pilates, Boxing and Dance. </p>-->
<!--            </div>-->
<!--        </div>-->

<!--        <div class="single-box">-->
<!--            <div class="img-area"></div>-->
<!--            <div class="img-text">-->
<!--                <span class="header-text"><strong>Pound</strong></span>-->
<!--                <p>A heart pumping workout while drumming to the beat of your favourite music. Hold tight to weighted-->
<!--                    drumsticks and POUND it out with this full-body workout filled with cardio. </p>-->
<!--            </div>-->
<!--        </div>-->

        <div class="single-box">
            <div class="img-area"></div>
            <div class="img-text">
                <span class="header-text"><strong><?php echo $lang['shape-up'] ?></strong></span>
                <p><?php echo $lang['shape1'] ?></p>
            </div>
            <div class="teacher">
                <p><strong>Instructor: Marcie </strong></p>
            </div>
        </div>

        <div class="single-box">
            <div class="img-area"></div>
            <div class="img-text">
                <span class="header-text"><strong><?php echo $lang['spin'] ?></strong></span>
                <p><?php echo $lang['spin1'] ?></p>
            </div>
            <div class="teacher">
                <p><strong>Instructor: Maria</strong></p>
            </div>
        </div>

        <div class="single-box">
            <div class="img-area"></div>
            <div class="img-text">
                <span class="header-text"><strong><?php echo $lang['strong'] ?></strong></span>
                <p><?php echo $lang['strong1'] ?></p>
            </div>
            <div class="teacher">
                <p><strong>Instructor: Samantha</strong></p>
            </div>
        </div>


        <div class="single-box">
            <div class="img-area"></div>
            <div class="img-text">
                <span class="header-text"><strong><?php echo $lang['yoga'] ?></strong></span>
                <p><?php echo $lang['yoga1'] ?> </p>
            </div>
            <div class="teacher">
                <p><strong>Instructor: Ben </strong></p>
            </div>
        </div>

        <div class="single-box">
            <div class="img-area"></div>
            <div class="img-text">
                <span class="header-text"><strong><?php echo $lang['yogalate'] ?></strong></span>
                <p><?php echo $lang['yogalate1'] ?></p>
            </div>
            <div class="teacher">
                <p><strong>Instructor: Marcie & Ben</strong></p>
            </div>
        </div>

<!--        <div class="single-box">-->
<!--            <div class="img-area"></div>-->
<!--            <div class="img-text">-->
<!--                <span class="header-text"><strong>Zumba</strong></span>-->
<!--                <p>This class is designed to bring people together to sweat it on. We take the "work" out of workout,-->
<!--                    by mixing low-intensity and high-intensity moves for an interval-style, calorie-burning dance fitness party.  </p>-->
<!--            </div>-->
<!--        </div>-->

        <div class="single-box">
            <div class="img-area"></div>
            <div class="img-text">
                <span class="header-text"><strong><?php echo $lang['30'] ?></strong></span>
                <p><?php echo $lang['30-1'] ?></p>
            </div>
            <div class="teacher">
                <p><strong>Instructor: Ben </strong></p>
            </div>
        </div>

    </div>
</body>
</html>

<?php include '../view/web-foot.php'?>
