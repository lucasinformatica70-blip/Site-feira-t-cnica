console.log("Se voce consegue ler isso, o codigo javascript esta funcionando.");
const slides = document.querySelectorAll(".slide");
const dots = document.querySelectorAll(".dot");
const nextButton = document.querySelector("#nextButton");

let currentSlide = 0;
let scrolling = false;



function updateDots() {

    dots.forEach((dot, index) => {

        dot.classList.toggle(
            "active",
            index === currentSlide
        );

    });

}



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



if (nextButton) {
    nextButton.addEventListener("click", () => {
        if (currentSlide < slides.length - 1) {
            goToSlide(currentSlide + 1);
        } else {
            const footer = document.querySelector("footer");

            if (footer) {
                footer.scrollIntoView({
                    behavior: "smooth"
                });
            }
        }
    });
}


dots.forEach((dot, index) => {

    dot.addEventListener("click", () => {

        goToSlide(index);

    });

});


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


updateDots();

