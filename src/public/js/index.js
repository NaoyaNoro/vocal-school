document.addEventListener("DOMContentLoaded", function () {
    const voiceSwiper = new Swiper(".voice__contents", {
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".voice__pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".voice__button--next",
            prevEl: ".voice__button--prev",
        },
        slidesPerView: 1,
        spaceBetween: 30,
        effect: "slide",
        speed: 800
    });
});