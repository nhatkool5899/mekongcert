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
    slidesPerView: 3,
    slidesPerColumn: 1,
    spaceBetween: 12,
    loop: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: '.news-next-slide',
        prevEl: '.news-prev-slide',
    },
    breakpoints: {
        1024: {
            slidesPerView: 3,
            spaceBetween: 12,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 12,
        },
        640: {
            slidesPerView: 1,
            slidesPerColumn: 1,
            spaceBetween: 12,
        },
        320: {
            slidesPerView: 1,
            slidesPerColumn: 1,
            spaceBetween: 12,
        }
    }
});