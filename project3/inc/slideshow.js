$(document).ready(function() {
    let currentIndex = 0;
    const slides = $('.slideshow-container .slide');
    const totalSlides = slides.length;

    function showNextSlide() {
        // Hide the current slide
        $(slides[currentIndex]).fadeOut();

        // Increment the index
        currentIndex = (currentIndex + 1) % totalSlides;

        // Show the next slide
        $(slides[currentIndex]).fadeIn();
    }

    setInterval(showNextSlide, 5000);
});
