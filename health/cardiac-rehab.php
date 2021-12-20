<?php
require "../config.php";
include '../view/head.php' ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/normalize.css">
    <link rel="stylesheet" href="card.css">
    <script src="https://kit.fontawesome.com/feb30e64e7.js" crossorigin="anonymous"></script>
</head>
<body>
<div class = "main-wrapper">
    <h2 id="title"><?php echo $lang["cardiac"] ?></h2>
    <div class="text-info">
        <p><?php echo $lang["card-desc"] ?></p>
    </div>

    <div class = "article-collection">
        <!-- article single -->
        <article  id="2">
            <div class = "img-box">
                <img src = "../resources/images/stock-photos/cardiotest-cottonbro.jpg" alt = "">
            </div>

            <div class = "text-content">
                <h3><?php echo $lang["cust"] ?></h3>
                <div class = "rating">
                            <span>
                                <i class = "fas fa-star"></i>
                            </span>
                    <span>
                                <i class = "fas fa-star"></i>
                            </span>
                    <span>
                                <i class = "fas fa-star"></i>
                            </span>
                    <span>
                                <i class = "fas fa-star"></i>
                            </span>
                    <span>
                                <i class = "fas fa-star"></i>
                            </span>
                </div>

                <ul class="desc">
                    <li><?php echo $lang["custom"] ?></li>
                    <li><?php echo $lang["custom1"] ?></li>
                    <li><?php echo $lang["custom2"] ?></li>
                </ul>

                <!--                <div class = "location">-->
                <!--                    <div>-->
                <!--                        <span><i class = "fas fa-map"></i></span>-->
                <!--                        <span>San Franciso, CA</span>-->
                <!--                    </div>-->
                <!--                    <button type = "button">Read</button>-->
                <!--                </div>-->
            </div>
        </article>
        <!-- end of article single -->

        <!-- article single -->
        <article id="1">
            <div class = "img-box">
                <img src = "../resources/images/stock-photos/heartrate-lorenzo.jpg" alt = "">
            </div>

            <div class = "text-content">
                <h3><?php echo $lang["super"] ?></h3>
                <div class = "rating">
                            <span>
                                <i class = "fas fa-star"></i>
                            </span>
                    <span>
                                <i class = "fas fa-star"></i>
                            </span>
                    <span>
                                <i class = "fas fa-star"></i>
                            </span>
                    <span>
                                <i class = "fas fa-star"></i>
                            </span>
                    <span>
                                <i class = "fas fa-star"></i>
                            </span>
                </div>

                <ul class="desc">
                <li><?php echo $lang["super1"] ?></li>
                <li><?php echo $lang["super2"] ?></li>
                <li><?php echo $lang["super3"] ?></li>
                </ul>
<!--                <div class = "location">-->
<!--                    <div>-->
<!--                        <span><i class = "fas fa-map"></i></span>-->
<!--                        <span>San Franciso, CA</span>-->
<!--                    </div>-->
<!--                    <button type = "button">Read</button>-->
<!--                </div>-->
            </div>
        </article >
        <!-- end of article single -->

        <!-- article single -->
        <article  id="3">
            <div class = "img-box">
                <img src = "../resources/images/stock-photos/running-andrea-piacquadio.jpg" alt = "">
            </div>

            <div class = "text-content">
                <h3><?php echo $lang["dyn"] ?></h3>
                <div class = "rating">
                            <span>
                                <i class = "fas fa-star"></i>
                            </span>
                    <span>
                                <i class = "fas fa-star"></i>
                            </span>
                    <span>
                                <i class = "fas fa-star"></i>
                            </span>
                    <span>
                                <i class = "fas fa-star"></i>
                            </span>
                    <span>
                                <i class = "fas fa-star"></i>
                            </span>
                </div>

                <ul class="desc">
                    <li><?php echo $lang["dyn1"] ?></li>
                    <li><?php echo $lang["dyn2"] ?></li>
                </ul>

<!--                <div class = "location">-->
<!--                    <div>-->
<!--                        <span><i class = "fas fa-map"></i></span>-->
<!--                        <span>San Franciso, CA</span>-->
<!--                    </div>-->
<!--                    <button type = "button">Read</button>-->
<!--                </div>-->
            </div>
        </article>
        <!-- end of article single -->

        <!-- article single -->
        <article  id="4">
            <div class = "img-box">
                <img src = "../resources/images/stock-photos/paperwork-pixabay.jpg" alt = "">
            </div>

            <div class = "text-content">
                <h3><?php echo $lang["prog"] ?></h3>
                <div class = "rating">
                            <span>
                                <i class = "fas fa-star"></i>
                            </span>
                    <span>
                                <i class = "fas fa-star"></i>
                            </span>
                    <span>
                                <i class = "fas fa-star"></i>
                            </span>
                    <span>
                                <i class = "fas fa-star"></i>
                            </span>
                    <span>
                                <i class = "fas fa-star"></i>
                            </span>
                </div>

                <ul class="desc">
                    <li><?php echo $lang["prog1"] ?></li>
                    <li><?php echo $lang["prog2"] ?></li>
                </ul>


<!--                <div class = "location">-->
<!--                    <div>-->
<!--                        <span><i class = "fas fa-map"></i></span>-->
<!--                        <span>San Franciso, CA</span>-->
<!--                    </div>-->
<!--                    <button type = "button">Read</button>-->
<!--                </div>-->
            </div>
        </article>
        <!-- end of article single -->
    </div>
</div>

</body>
</html>
<?php include '../view/footer.php' ?>