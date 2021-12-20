//SLIDESHOW
const slides = document.querySelectorAll('.slide');
const next = document.querySelector('#next');
const prev = document.querySelector('#prev');
const auto = true; // Auto scroll
const intervalTime = 6000; //5000 = 5s
let slideInterval;

const nextSlide = () => {
    // Get current class
    const current = document.querySelector('.current');
    // Remove current class
    current.classList.remove('current');
    // Check for next slide
    if (current.nextElementSibling) {
        // Add current to next sibling
        current.nextElementSibling.classList.add('current');
    } else {
        // Add current to start
        slides[0].classList.add('current');
    }
    setTimeout(() => current.classList.remove('current'));
};

const prevSlide = () => {
    // Get current class
    const current = document.querySelector('.current');
    // Remove current class
    current.classList.remove('current');
    // Check for prev slide
    if (current.previousElementSibling) {
        // Add current to prev sibling
        current.previousElementSibling.classList.add('current');
    } else {
        // Add current to last
        slides[slides.length - 1].classList.add('current');
    }
    setTimeout(() => current.classList.remove('current'));
};

// Button events
next.addEventListener('click', e => {
    nextSlide();
    if (auto) {
        clearInterval(slideInterval);
        slideInterval = setInterval(nextSlide, intervalTime);
    }
});

prev.addEventListener('click', e => {
    prevSlide();
    if (auto) {
        clearInterval(slideInterval);
        slideInterval = setInterval(nextSlide, intervalTime);
    }
});

// Auto slide
if (auto) {
    // Run next slide at interval time
    slideInterval = setInterval(nextSlide, intervalTime);
}

// const navSlide = () =>{
//     const burger = document.querySelector('.burger');
//     const nav = document.querySelector('.nav-link');
//     const navLinks = document.querySelectorAll('.nav-link li');
//
//
//     burger.addEventListener('click', () =>{
//         //toggle nav
//         nav.classList.toggle('nav-active');
//
//         //animate links
//         navLinks.forEach((link, index) => {
//             if(link.style.animation){
//                 link.style.animation = '';
//             }else{
//                 link.style.animation = `navlinkfade 0.5s ease forwards ${index / 7}s`;
//             }
//             //       console.log(index/7);
//         });
//         //burger animation
//         burger.classList.toggle('toggle');
//     });
// }
//
// navSlide();
//
// // Initialize and add the map
// function initMap() {
//     // The location of Uluru
//       uluru = { lat: -25.344, lng: 131.036 };
//     // The map, centered at Uluru
//     const map = new google.maps.Map(document.getElementById("map"), {
//         zoom: 4,
//         center: uluru,
//     });
//     // The marker, positioned at Uluru
//     const marker = new google.maps.Marker({
//         position: uluru,
//         map: map,
//     });
// }
//
