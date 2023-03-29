$("#switchLang").click(function () {
  window.location =
    window.location.protocol + "//" + window.location.host + `/wps/`;
});

$("#switchLangAbout").click(function () {
  window.location =
    window.location.protocol + "//" + window.location.host + `/wps/about/`;
});

$("#switchLangServices").click(function () {
  window.location =
    window.location.protocol + "//" + window.location.host + `/wps/services/`;
});

$("#switchLangClients").click(function () {
  window.location =
    window.location.protocol + "//" + window.location.host + `/wps/clients/`;
});

$("#switchLangPartners").click(function () {
  window.location =
    window.location.protocol + "//" + window.location.host + `/wps/partners/`;
});

$("#switchLangNews").click(function () {
  window.location =
    window.location.protocol + "//" + window.location.host + `/wps/news/`;
});

$("#switchLangContact").click(function () {
  window.location =
    window.location.protocol + "//" + window.location.host + `/wps/contact/`;
});

$("#switchLangCareer").click(function () {
  window.location =
    window.location.protocol + "//" + window.location.host + `/wps/career/`;
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
