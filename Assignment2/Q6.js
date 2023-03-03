let slideIndex = 0;

function nextSlide(step) {
    showSlide(slideIndex + step);
}

function showSlide(index) {
    slideIndex = index;
    
    let slides = document.getElementsByClassName("slide");
    if (slideIndex > slides.length - 1) {
        slideIndex = 0;
    } else if (slideIndex < 0) {
        slideIndex = slides.length - 1;
    }

    for (let i=0; i < slides.length; i++) {
        if (slideIndex === i) {
            slides[i].style.display = "flex";
        } else {
            slides[i].style.display = "none";
        }
    }
}