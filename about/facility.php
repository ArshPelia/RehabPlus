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
    <title>Rehab Plus</title>
    <link rel="stylesheet" href="gallery.css">
</head>
<body id="gallery">
<div class="overlay"></div>
    <div class="modal">
    <!--img, next/prev/close button -->
        <img src="" alt="">
        <button class="prev"><</button>
        <button class="next">></button>
        <button class="close">X</button>
    </div>

    <section>
        <h3 class="heading">Our Facility</h3>
        <div class="border"></div>
        <p class="star" style="color: #ffc308 ">★</p>
<!--        <p class="desc">Welcome To My Gallery</p>-->
        <div class="gallery-container">
            <div class="gallery_item"><img src="../resources/images/gym-photos/2ndfloor-railing.JPG" alt=""></div>
            <div class="gallery_item"><img src="../resources/images/gym-photos/leg-area.JPG" alt=""></div>
            <div class="gallery_item"><img src="../resources/images/gym-photos/1stfloor.JPG" alt=""></div>
            <div class="gallery_item"><img src="../resources/images/gym-photos/bikes.JPG" alt=""></div>
            <div class="gallery_item"><img src="../resources/images/gym-photos/pilates1.JPG" alt=""></div>
            <div class="gallery_item"><img src="../resources/images/gym-photos/girlonbike.JPG" alt=""></div>
            <div class="gallery_item"><img src="../resources/images/gym-photos/ropes.JPG" alt=""></div>
            <div class="gallery_item"><img src="../resources/images/gym-photos/strech-class.JPG" alt=""></div>
            <div class="gallery_item"><img src="../resources/images/gym-photos/weights.JPG" alt=""></div>
            <div class="gallery_item"><img src="../resources/images/gym-photos/physioroom.jpg" alt=""></div>
            <div class="gallery_item"><img src="../resources/images/gym-photos/outside.JPG" alt=""></div>
            <div class="gallery_item"><img src="../resources/images/staff-pics/group-photo.jpg" alt=""></div>
        </div>
    </section>

<script>
    const galleryItem = document.querySelectorAll(".gallery_item");
    const overlay = document.querySelector(".overlay");
    const modal = document.querySelector(".modal");
    const close = document.querySelector(".close");
    const next = document.querySelector(".next");
    const prev = document.querySelector(".prev");

    var idx_src_arr = {};
    var current_idx = 0;

    //clicking on img items

    galleryItem.forEach((item, i ) =>{
        idx_src_arr[i] = item.children[0].src;
        item.addEventListener('click', function (){
            current_idx = i;
            overlay.classList.add("show1");
            modal.classList.add("show1");
            modal.children[0].src=item.children[0].src;
        })
    })

    //close button

    close.addEventListener('click', function (){
        overlay.classList.remove("show1");
        modal.classList.remove("show1");
    })

    let show_modal = (src_str) =>{
        modal.children[0].src = src_str;
    }

    next.addEventListener('click', function (){
        if(current_idx === galleryItem.length - 1){
            current_idx = 0
        }else {
            current_idx = current_idx +1;
        }
        show_modal(idx_src_arr[current_idx]);
    })

    //back

    prev.addEventListener('click', function (){
        if(current_idx === 0){
            current_idx = galleryItem.length - 1;
        }else {
            current_idx = current_idx - 1;
        }
        show_modal(idx_src_arr[current_idx]);
    })

</script>
</body>
</html>

<?php include '../view/footer.php' ?>