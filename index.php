<?php
require "config.php";
<<<<<<< HEAD
include './view/web-head.php' ?>
=======
include 'view/web-head.php' ?>
>>>>>>> f8a49b363bf84c89de2ced8a324a098c54896e72
<!doctype html>
<html lang=en>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="styles/home-page.css">
</head>
<body>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<section id="slideshow">
    <div class="slider">
        <div class="slide current">
            <div class="content ">
                <h1><?php echo $lang['randp'] ?></h1>
                <p><?php echo $lang['fit-text'] ?></p>
            </div>
        </div>
        <div class="slide">
            <div class="content">
                <h1><?php echo $lang['train'] ?></h1>
                <p><?php echo $lang['train-text'] ?></p>
            </div>
        </div>
        <div class="slide">
            <div class="content">
                <h1><?php echo $lang['card'] ?></h1>
                <p><?php echo $lang['card-text'] ?></p>
            </div>
        </div>
        <div class="slide">
            <div class="content">
                <h1><?php echo $lang['vest'] ?></h1>
                <p><?php echo $lang['vest-text'] ?></p>
            </div>
        </div>
        <div class="slide">
            <div class="content">
                <h1><?php echo $lang['pil'] ?></h1>
                <p><?php echo $lang['pil-text'] ?></p>
            </div>
        </div>
    </div>
    <div class="buttons">
        <button id="prev"><i class="fas fa-arrow-left"></i></button>
        <button id="next"><i class="fas fa-arrow-right"></i></button>
    </div>

    <script src="js/main.js"></script>
</section>

<!--<section>-->
<!--      <img id="gymlogo" src="resources/images/logo.png">-->
<!--    <p id="covid">-->
<!--        <strong>Dear Members, </strong> <br>-->
<!--        <br> As per the Government of Ontario's-->
<!--        announcement:<br> <br>-->
<!--        <b>The gym is closed until further notice.</b> <br>-->
<!---->
<!--        <br>The <em> CLINIC</em>, however,  remains <b>OPEN for rehabilitation services </b>-->
<!--        (In person or virtual).-->
<!---->
<!--        <br>-->
<!--        All gym memberships are put on hold. if you would like to-->
<!--        participate in virtual classes please call to keep your-->
<!--        membership active or purchase a GroupEx membership via-->
<!--        Wellness living.-->
<!--        <br>-->
<!--        <br>-->
<!--        Please refer to the <a href="#"> Covid page </a> for more information.-->
<!--        Thank you and we look forward to seeing you again!-->
<!--        <br>-->
<!--        <br> - Rehab Plus Management-->
<!--    </p>-->
<!--</section>-->



<h1 id="services"><?php echo $lang['serv']?></h1>
<section>
    <div class="wrapper">
        <div class=" side left">

            <div class="image rehab"></div>
            <div class="caption">
                <i class="fas fa-clinic-medical" style="font-size: 3em"></i>
                <h1><?php echo $lang['randp'] ?></h1>
                <p><?php echo $lang['randp-text'] ?></p>
                <br>
                <a href="physiotherapy/index.php" class="view-more"> <?php echo $lang['view'] ?></a>
                <br>
            </div>
        </div>

        <div class="side right">
            <div class="image fitness"></div>
            <div class="caption">
                <i class="fas fa-heartbeat" style="font-size: 3em"></i>
                <h1><?php echo $lang['fitness'] ?></h1>
                <p><?php echo $lang['col-fit-text'] ?> </p>
                <br>
                <a href="fitness/membership.php" class="view-more"> <?php echo $lang['view'] ?></a>
                <br>
            </div>
        </div>
    </div>

</section>

<div id="sched">
    <figure>
        <figcaption>
            <!-- <?php echo $lang['sched'] ?> -->
            Winter 2022-2023 Fitness Class Schedule
        </figcaption>
    </figure>
    <img id="myImg" alt="Exercise Schedule" src="resources/images/Schedule/Winter 2022 Class Schedule_1-1-1.jpg">
    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- The Close Button -->
        <span class="close">&times;</span>

        <!-- Modal Content (The Image) -->
        <img class="modal-content" id="img01">

        <!-- Modal Caption (Image Text) -->
        <!-- <div id="caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, sed.</div> -->
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

</body>
</html>
<?php include 'view/web-foot.php' ?>