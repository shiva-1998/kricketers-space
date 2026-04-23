document.addEventListener('DOMContentLoaded', function() {
    const swiper = new Swiper('.topPerformersSwiper', {
        slidesPerView: 235,
        spaceBetween: 50,
        loop: true,
        centeredSlides: true,
        navigation: {
            nextEl: '.swiper-next',
            prevEl: '.swiper-prev',
        },
        breakpoints: {
            // Adjust if you want to see partial cards on the side
            1200: { slidesPerView: 1.2 }
        }
    });
});