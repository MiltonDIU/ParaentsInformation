// main carousel start
$('.owl-carousel').owlCarousel({
    animateOut: 'animate__animated animate__fadeOut',
    animateIn: 'animate__animated animate__zoomIn',
    items: 1,
    nav: false,
    loop: true,
    autoplay: true,
    smartSpeed: 2000,
});

// Animation on scroll
AOS.init({
    offset: 30,
    once: true,
    duration: 1000,
});

// preloader
var loader = document.getElementById("preloader");

window.addEventListener("load", function(){
    loader.style.display = "none";
})
