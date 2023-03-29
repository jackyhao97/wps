$("#switchLang").click(function () {
  window.location =
    window.location.protocol + "//" + window.location.host + `/wps/id/`;
});

$("#switchLangAbout").click(function () {
  window.location =
    window.location.protocol + "//" + window.location.host + `/wps/id/about/`;
});

$("#switchLangServices").click(function () {
  window.location =
    window.location.protocol +
    "//" +
    window.location.host +
    `/wps/id/services/`;
});

$("#switchLangClients").click(function () {
  window.location =
    window.location.protocol + "//" + window.location.host + `/wps/id/clients/`;
});

$("#switchLangPartners").click(function () {
  window.location =
    window.location.protocol +
    "//" +
    window.location.host +
    `/wps/id/partners/`;
});

$("#switchLangNews").click(function () {
  window.location =
    window.location.protocol + "//" + window.location.host + `/wps/id/news/`;
});

$("#switchLangContact").click(function () {
  window.location =
    window.location.protocol + "//" + window.location.host + `/wps/id/contact/`;
});

$("#switchLangCareer").click(function () {
  window.location =
    window.location.protocol + "//" + window.location.host + `/wps/id/career/`;
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
