//  код для слайдера 
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("slider");
    var dots = document.getElementsByClassName("bulet");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 5000); // Change image every 2 seconds
}


// perehod on restoran


document.addEventListener('DOMContentLoaded', function() {
    var popularity_place_card = document.getElementsByClassName('popularity_place_card');
    for (var i = 0; i < popularity_place_card.length; i++) {
        popularity_place_card[i].addEventListener('click', function() {
            var elementNumber = this.id;
            window.location.href = "pages/restoran.php?element=" + elementNumber; // замените ссылку на нужную вам
        });
    }
});



