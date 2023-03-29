$("#switchLang").click(function () {
  window.location =
    window.location.protocol + "//" + window.location.host + `/wps/id/`;
});

const swiperTestimonial = new Swiper(".swiper-container-testimonial", {
  pagination: {
    el: ".swiper-pagination-testimonial",
    clickable: true,
  },
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
