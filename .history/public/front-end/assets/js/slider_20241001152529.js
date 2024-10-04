const progressCircle = document.querySelector(".autoplay-progress svg");
const progressContent = document.querySelector(".autoplay-progress span");
var swiper = new Swiper(".banner-swiper", {
    spaceBetween: 10,
    centeredSlides: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false
    },
    on: {
    autoplayTimeLeft(s, time, progress) {
        progressCircle.style.setProperty("--progress", 1 - progress);
        progressContent.textContent = `${Math.ceil(time / 1000)}s`;
    }
    }
});


var swiper = new Swiper(".news-swiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false
    },
    pagination: {
        el: ".news-swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        768: {
        slidesPerView: 2,
        spaceBetween: 20,
        },
        1200: {
        slidesPerView: 3,
        spaceBetween: 30,
        },
    },
});