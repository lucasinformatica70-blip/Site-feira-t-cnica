const slides = document.querySelectorAll(".slide");
const dots = document.querySelectorAll(".dot");
const nextButton = document.querySelector("#nextButton");

let currentSlide = 0;
let scrolling = false;


/* Update active dot */

function updateDots() {

    dots.forEach((dot, index) => {

        dot.classList.toggle(
            "active",
            index === currentSlide
        );

    });

}


/* Go to slide */

function goToSlide(index) {

    if (index < 0) {
        index = 0;
    }

    if (index >= slides.length) {
        index = slides.length - 1;
    }

    currentSlide = index;

    window.scrollTo({
        top: slides[index].offsetTop,
        behavior: "smooth"
    });

    updateDots();

}


/* Next button */

nextButton.addEventListener("click", () => {

    if (currentSlide < slides.length - 1) {

        goToSlide(currentSlide + 1);

    } else {

        /*
         * At the last slide, go to the footer
         * instead of looping back to slide 1.
         */

        document.querySelector("footer").scrollIntoView({
            behavior: "smooth"
        });

    }

});


/* Dot buttons */

dots.forEach((dot, index) => {

    dot.addEventListener("click", () => {

        goToSlide(index);

    });

});


/* Detect current slide while scrolling */

window.addEventListener("scroll", () => {

    const scrollPosition = window.scrollY;

    let closestSlide = 0;
    let closestDistance = Infinity;


    slides.forEach((slide, index) => {

        const distance = Math.abs(
            slide.offsetTop - scrollPosition
        );


        if (distance < closestDistance) {

            closestDistance = distance;
            closestSlide = index;

        }

    });


    if (closestSlide !== currentSlide) {

        currentSlide = closestSlide;

        updateDots();

    }

});


/* Start on slide 1 */

updateDots();

