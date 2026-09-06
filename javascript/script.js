```javascript
const slideshow = document.querySelector(".slideshow");
const slides = document.querySelectorAll(".slide");
const dots = document.querySelectorAll(".dot");
const nextButton = document.querySelector("#nextButton");

let currentSlide = 0;

function setActiveDot(index) {
    currentSlide = index;

    dots.forEach((dot, i) => {
        dot.classList.toggle("active", i === index);
    });
}

function nextSlide() {
    if (currentSlide < slides.length - 1) {
        currentSlide++;
    } else {
        currentSlide = 0;
    }

    slideshow.scrollTo({
        top: slides[currentSlide].offsetTop,
        behavior: "smooth"
    });

    setActiveDot(currentSlide);
}

nextButton.addEventListener("click", nextSlide);

dots.forEach((dot, index) => {
    dot.addEventListener("click", () => {
        slideshow.scrollTo({
            top: slides[index].offsetTop,
            behavior: "smooth"
        });

        setActiveDot(index);
    });
});

slideshow.addEventListener("scroll", () => {
    let closest = 0;
    let distance = Infinity;

    slides.forEach((slide, index) => {
        const d = Math.abs(slide.offsetTop - slideshow.scrollTop);

        if (d < distance) {
            distance = d;
            closest = index;
        }
    });

    setActiveDot(closest);
});

setActiveDot(0);
```

