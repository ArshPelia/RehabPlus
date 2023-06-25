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
    <link rel="stylesheet" href="our-team.css">
    <title>Document</title>
</head>
<body>
    <main>
        <h1 class="heading"><?php echo $lang["our-team"] ?>
        </h1>
        <div class="border"></div>

        <div class="wrapper-grid">

            <div class="card">
                <div class="container">
                    <div class='banner-img'></div>
                    <div class="overlay">
                        <div class="text"><?php echo $lang["linda-desc2"] ?></div>
                    </div>
                    <img src='../resources/images/staff-pics/linda.jpg' alt='profile image' class="profile-img">
                    <h2 class="name">Linda Dagenais B.Sc. P.T.</h2>
                    <h3 class="role"><?php echo $lang["linda-role"] ?></h3>
                    <p class="description"><?php echo $lang["linda-desc"] ?></p>
                    <button class='read-btn'>Read More</button>
                </div>
                <div class="email"><a href="mailto:">Email</a></div>
            </div>


            <div class="card">
            <div class="container">
                <div class='banner-img'></div>
                <div class="overlay">
                    <div class="text"><?php echo $lang["janet-desc2"] ?></div>
                </div>
                <img src='../resources/images/staff-pics/janet-flatman.jpg' alt='profile image' class="profile-img">
                <h2 class="name">Janet Flatman B.Sc, P.T.</h2>
                <h3 class="role"><?php echo $lang["jane-role"] ?></h3>
                <p class="description"><?php echo $lang["janet-desc"] ?></p>
                <button class='read-btn'>Read More</button>
            </div>
            <div class="email"><a href="mailto:">Email</a></div>
        </div>

        <div class="card">
            <div class="container">
                <div class='banner-img'></div>
                <div class="overlay">
                    <div class="text"><?php echo $lang["marcie-desc2"] ?></div>
                </div>
                <img src='../resources/images/staff-pics/marcie-easthope.jpg' alt='profile image' class="profile-img">
                <h2 class="name">Marcie Easthope,  B.HSc, M.Sc. P.T</h2>
                <h3 class="role"><?php echo $lang["marcie-role"] ?></h3>
                <p class="description"><?php echo $lang["marcie-desc"] ?></p>
                <button class='read-btn'>Read More</button>
            </div>
            <div class="email"><a href="mailto:">Email</a></div>
        </div>

        <div class="card">
            <div class="container">
                <div class='banner-img'></div>
                <div class="overlay">
                    <div class="text"><?php echo $lang["martin-desc2"] ?></div>
                </div>
                <img src='../resources/images/staff-pics/martin-seguin.jpg' alt='profile image' class="profile-img">
                <h2 class="name">Martin Seguin G.HK M.Sc. P.T.</h2>
                <h3 class="role"><?php echo $lang["matin-role"] ?></h3>
                <p class="description"><?php echo $lang["martin-desc"] ?></p>
                <button class='read-btn'>Read More</button>
            </div>
            <div class="email"><a href="mailto:">Email</a></div>
        </div>

        <div class="card">
            <div class="container">
                <div class='banner-img'></div>
                <div class="overlay">
                    <div class="text"><?php echo $lang["emilie-desc2"] ?></div>
                </div>
                <img src='../resources/images/staff-pics/Emilie-e.jpg' alt='profile image' class="profile-img">
                <h2 class="name">Emilie Simoneau, BSc. HK, M.Sc. O.T.</h2>
                <h3 class="role"><?php echo $lang["emilie-role"] ?></h3>
                <p class="description"><?php echo $lang["emilie-desc"] ?></p>
                <button class='read-btn'>Read More</button>
            </div>
            <div class="email"><a href="mailto:">Email</a></div>
        </div>

        <div class="card">
            <div class="container">
                <div class='banner-img'></div>
                <!--                    <div class="overlay">-->
                <!--                        <div class="text"></div>-->
                <!--                    </div>-->
                <img src='../resources/images/staff-pics/katy.jpg' alt='profile image' class="profile-img">
                <h2 class="name">Katy Sahler, B.P.H.E </h2>
                <h3 class="role"><?php echo $lang["katy-role"] ?></h3>
                <p class="description"><?php echo $lang["katy-desc"] ?></p>
                <!--                    <button class='read-btn'>Read More</button>-->
            </div>
            <div class="email"><a href="mailto:">Email</a></div>
        </div>

        <div class="card">
            <div class="container">
                <div class='banner-img'></div>
                <div class="overlay">
                    <div class="text"><?php echo $lang["tiff-desc2"] ?></div>
                </div>
                <img src='../resources/images/staff-pics/tiffanie-veilleux.jpg' alt='profile image' class="profile-img">
                <h2 class="name">Tiffanie Veilleux</h2>
                <h3 class="role"><?php echo $lang["tiff-role"] ?></h3>
                <p class="description"><?php echo $lang["tiff-desc"] ?></p>
                <button class='read-btn'>Read More</button>
            </div>
            <div class="email"><a href="mailto:">Email</a></div>
        </div>

        <div class="card">
            <div class="container">
                <div class='banner-img'></div>
                <div class="overlay">
                    <div class="text"><?php echo $lang["maria-desc2"] ?></div>
                </div>
                <img src='../resources/images/staff-pics/Maria.jpg' alt='profile image' class="profile-img">
                <h2 class="name">Maria Lavoie, B.A. Sc, Kin</h2>
                <h3 class="role"><?php echo $lang["maria-role"] ?></h3>
                <p class="description"><?php echo $lang["maria-desc"] ?></p>
                <button class='read-btn'>Read More</button>
            </div>
            <div class="email"><a href="mailto:">Email</a></div>
        </div>

        <div class="card">
            <div class="container">
                <div class='banner-img'></div>
<!--                    <div class="overlay">-->
<!--                        <div class="text"></div>-->
<!--                    </div>-->
                <img src='../resources/images/staff-pics/jane-f.jpeg' alt='profile image' class="profile-img">
                <h2 class="name">Jane Frapporti</h2>
                <h3 class="role"><?php echo $lang["jane-role"] ?></h3>
                <p class="description"><?php echo $lang["jane-desc"] ?></p>
<!--                    <button class='read-btn'>Read More</button>-->
            </div>
            <div class="email"><a href="mailto:">Email</a></div>
        </div>

        <div class="card">
            <div class="container">
                <div class='banner-img'></div>
<!--                    <div class="overlay">-->
<!--                        <div class="text"></div>-->
<!--                    </div>-->
                <img src='../resources/images/staff-pics/emie.jpg' alt='profile image' class="profile-img">
                <h2 class="name">Emie Mitron</h2>
                <h3 class="role"><?php echo $lang["emie-role"] ?></h3>
                <p class="description"><?php echo $lang["emie-desc"] ?></p>
<!--                    <button class='read-btn'>Read More</button>-->
            </div>
            <div class="email"><a href="mailto:">Email</a></div>
        </div>

        <div class="card">
            <div class="container">
                <div class='banner-img'></div>
                <!--                    <div class="overlay">-->
                <!--                        <div class="text"></div>-->
                <!--                    </div>-->
                <img src='../resources/images/staff-pics/ben-j.jpg' alt='profile image' class="profile-img">
                <h2 class="name">Ben Joron</h2>
                <h3 class="role"><?php echo $lang["ben-role"] ?></h3>
                <p class="description"><?php echo $lang["ben-desc"] ?></p>
                <!--                    <button class='read-btn'>Read More</button>-->
            </div>
            <div class="email"><a href="mailto:">Email</a></div>
        </div>

        <div class="card">
            <div class="container">
                <div class='banner-img'></div>
                <div class="overlay">
                    <div class="text"><?php echo $lang["eric-desc2"] ?></div>
                </div>
                <img src='../resources/images/staff-pics/eric-fortier.jpeg' alt='profile image' class="profile-img">
                <h2 class="name">Eric Fortier, B.Sc., RMT</h2>
                <h3 class="role"><?php echo $lang["eric-role"] ?></h3>
                <p class="description"><?php echo $lang["eric-desc"] ?></p>
                <button class='read-btn'>Read More</button>
            </div>
            <div class="email"><a href="mailto:">Email</a></div>
        </div>

            <div class="card">
                <div class="container">
                    <div class='banner-img'></div>
                    <div class="overlay">
                        <div class="text"><?php echo $lang["yves-desc2"] ?></div>
                    </div>
                    <img src='../resources/images/staff-pics/yves.jpg' alt='profile image' class="profile-img">
                    <h2 class="name">Yves Viel</h2>
                    <h3 class="role"><?php echo $lang["yves-role"] ?></h3>
                    <p class="description"><?php echo $lang["yves-desc"] ?></p>
                    <button class='read-btn'>Read More</button>
                </div>
                <div class="email"><a href="mailto:">Email</a></div>
            </div>

        </div>
    </main>
</body>
</html>

<?php include '../view/web-foot.php'?>