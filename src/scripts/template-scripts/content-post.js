
const newsSwiper = new Swiper(".single-post__slider", {
    loop: true,
    spaceBetween: 21,
    slidesPerView: 4,
    freeMode: false,
    watchSlidesProgress: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
  var newsSwiper2 = new Swiper(".single-post__slider2", {
    loop: false,
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    thumbs: {
        swiper: newsSwiper,
    },
  });