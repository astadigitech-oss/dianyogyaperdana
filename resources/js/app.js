import Swiper from "swiper";
import { Autoplay, Navigation } from "swiper/modules"; // import module dari "swiper/modules"
import "swiper/css";
import { CountUp } from "countup.js";

const swiperBenefit = new Swiper(".swiperBenefit", {
    modules: [Autoplay], // aktifkan modul
    slidesPerView: 3,
    autoplay: {
        delay: 6000,
        disableOnInteraction: true,
    },
    breakpoints: {
        1024: { slidesPerView: 3 },
        768: { slidesPerView: 2 },
        640: { slidesPerView: 1 },
        0: { slidesPerView: 1 },
    },
});

const swiperStat = new Swiper(".swiperStat", {
    modules: [Autoplay], // aktifkan modul
    slidesPerView: 3,
    autoplay: {
        delay: 6000,
        disableOnInteraction: true,
    },
    breakpoints: {
        1024: { slidesPerView: 3 },
        768: { slidesPerView: 3 },
        640: { slidesPerView: 1 },
        0: { slidesPerView: 1 },
    },
});

const swiperClient = new Swiper(".swiperClient", {
    modules: [Autoplay], // aktifkan modul
    spaceBetween: 50,
    loop: true,
    autoplay: {
        delay: 2000,
        disableOnInteraction: true,
    },
    breakpoints: {
        1366: { slidesPerView: 5 },
        768: { slidesPerView: 4 },
        640: { slidesPerView: 3 },
        0: { slidesPerView: 2 },
    },
});

const swiperTestimonial = new Swiper(".swiperTestimonial", {
    loop: true,
    modules: [Autoplay], // aktifkan modul
    autoplay: {
        delay: 2000,
        disableOnInteraction: true,
    },
    breakpoints: {
        768: { slidesPerView: 2 },
        0: { slidesPerView: 1 },
    },
});

const swiperValue = new Swiper(".swiperValue", {
    modules: [Autoplay], // aktifkan modul
    autoplay: {
        delay: 2000,
        disableOnInteraction: true,
    },
    breakpoints: {
        0: { slidesPerView: 1 },
    },
});

const swiperService = new Swiper(".swiperService", {
    loop: true,
    breakpoints: {
        1366: { slidesPerView: 2 },
        0: { slidesPerView: 1 },
    },
});

const swiperTeam = new Swiper(".swiperTeam", {
    modules: [Autoplay], // aktifkan modul
    spaceBetween: 30,
    loop: true,
    autoplay: {
        delay: 4000,
        disableOnInteraction: true,
    },
    breakpoints: {
        1366: { slidesPerView: 5 },
        1024: { slidesPerView: 4 },
        768: { slidesPerView: 3 },
        0: { slidesPerView: 1 },
    },
});

const swiperInsight = new Swiper(".swiperInsight", {
    modules: [Autoplay, Navigation], // aktifkan modul
    spaceBetween: 10,
    breakpoints: {
        1024: { slidesPerView: 3 },
        768: { slidesPerView: 2 },
        0: { slidesPerView: 1 },
    },
    navigation: {
        nextEl: ".swiper-button-next-insight",
        prevEl: ".swiper-button-prev-insight",
    },
});

document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll(".counter");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const el = entry.target;
                    const target = el.dataset.target || 0;
                    const suffix = el.dataset.suffix || "";

                    const counter = new CountUp(el, target, {
                        duration: 2,
                        suffix: suffix,
                        separator: ",",
                    });

                    if (!counter.error) {
                        counter.start();
                    } else {
                        console.error(counter.error);
                    }

                    observer.unobserve(el); // hanya sekali
                }
            });
        },
        { threshold: 1 }
    );

    counters.forEach((el) => observer.observe(el));
});
