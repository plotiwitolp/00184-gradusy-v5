(function ($) {
  $(document).ready(function () {
    // главный слайдер
    const heroSlider = new Swiper('.hero__slider', {
      fadeEffect: { crossFade: true },
      virtualTranslate: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: true,
      },
      speed: 500,
      slidesPerView: 1,
      effect: 'fade',
      loop: true,
      navigation: {
        nextEl: '.hero__slider_nav-next',
        prevEl: '.hero__slider_nav-prev',
      },
      pagination: {
        el: '.hero__slider_pag_el',
        type: 'bullets',
        bulletClass: 'hero__slider_pag_el_item',
        bulletActiveClass: 'active',
        clickable: true,
      },
    });

    // слайдер "Подробнее о клинике"
    const aboutBodySlider = new Swiper('.about__body_slider_el', {
      slidesPerView: 1,
      spaceBetween: 15,
      breakpoints: {
        768: { spaceBetween: 25 },
      },
    });

    // слайдер "услуги"
    const servBodySlider = new Swiper('.serv__body_slider', {
      slidesPerView: 1,
      spaceBetween: 15,
      scrollbar: {
        el: '.serv__body_slider_scrollbar_el',
        draggable: true,
      },
      breakpoints: {
        1200: { slidesPerView: 4, spaceBetween: 20 },
        768: { slidesPerView: 3, spaceBetween: 20 },
      },
    });

    // слайдер "клиентские дни"
    const clientBodySlider = new Swiper('.client__body_slider', {
      slidesPerView: 1,
      spaceBetween: 20,
      breakpoints: {
        1000: { spaceBetween: 20, slidesPerView: 4 },
        620: { slidesPerView: 2, spaceBetween: 10 },
      },
    });

    // слайдер "онлайн бутик"
    const onlineBodySlider = new Swiper('.online__body_slider', {
      slidesPerView: 1,
      spaceBetween: 15,
      breakpoints: {
        1200: { slidesPerView: 4, spaceBetween: 20 },
        768: { slidesPerView: 3, spaceBetween: 20 },
      },
    });

    // слайдер "наша команда"
    const aboutPageTeamSlider = new Swiper('.about-page__team_slider', {
      slidesPerView: 1,
      spaceBetween: 15,
      breakpoints: {
        1000: { spaceBetween: 10, slidesPerView: 6 },
        768: { slidesPerView: 4, spaceBetween: 10 },
        620: { slidesPerView: 2, spaceBetween: 10 },
      },
    });

    // слайдер "атмосфера"
    const aboutPageAtmSlider = new Swiper('.about-page__atm_slider', {
      slidesPerView: 1,
      spaceBetween: 5,
      breakpoints: {
        1000: { spaceBetween: 10, slidesPerView: 4 },
        768: { slidesPerView: 4, spaceBetween: 3 },
        620: { slidesPerView: 2, spaceBetween: 2 },
      },
    });

    // верхнее меню
    $('.header__burger').on('click', function () {
      $('.header__burger').toggleClass('active');
      $('.menu').toggleClass('active');
    });

    // подменю верхнего меню
    $('.menu__part_item_arrow').on('click', function () {
      $(this).toggleClass('active');
      $(this).next().slideToggle('700');
    });

    // слайдер на главной "проблемы и решения"
    const problemSolutionBodySlider = new Swiper('.problem-solution__body_slider', {
      // fadeEffect: { crossFade: true },
      // virtualTranslate: true,
      // autoplay: {
      //   delay: 5000,
      //   disableOnInteraction: true,
      // },
      speed: 500,
      slidesPerView: 1.1,
      spaceBetween: 10,
      // effect: 'fade',
      loop: false,
      breakpoints: {
        1200: { spaceBetween: 20, slidesPerView: 4 },
        1000: { spaceBetween: 20, slidesPerView: 3 },
        768: { spaceBetween: 15, slidesPerView: 2 },
        620: { spaceBetween: 10, slidesPerView: 1 },
      },
      navigation: {
        nextEl: '.problem-solution__swiper-button-next',
        prevEl: '.problem-solution__swiper-button-prev',
      },
      // pagination: {
      //   el: '.hero__slider_pag_el',
      //   type: 'bullets',
      //   bulletClass: 'hero__slider_pag_el_item',
      //   bulletActiveClass: 'active',
      //   clickable: true,
      // },
    });
  });
})(jQuery);
