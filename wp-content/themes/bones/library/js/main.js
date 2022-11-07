jQuery(document).ready(function ($) {

  // Slides
  var swiper = new Swiper('.js-home-slider', {
    slidesPerView: 'auto',
    centeredSlides: true,
    paginationClickable: true,
    watchOverflow: true,
    autoplay: {
      delay: 8000,
    },
    pagination: {
      el: '.js-home-slider .swiper-pagination',
      type: 'bullets',
      clickable: true,
    }
  });

  var swiper = new Swiper('.js-slider-product .swiper-container', {
    slidesPerView: 'auto',
    centeredSlides: true,
    paginationClickable: true,
    watchOverflow: true,
    autoplay: {
      delay: 8000,
    },
    pagination: {
      el: '.js-slider-product .swiper-container .swiper-pagination',
      type: 'bullets',
      clickable: true,
    },
    navigation: {
      nextEl: '.js-slider-product .swiper-button-next',
      prevEl: '.js-slider-product .swiper-button-prev',
    },
  });

  var swiper = new Swiper('.js-slider-images .swiper-container', {
    slidesPerView: 'auto',
    centeredSlides: true,
    paginationClickable: true,
    watchOverflow: true,
    autoplay: {
      delay: 8000,
    },
    pagination: {
      el: '.js-slider-images .swiper-pagination',
      type: 'bullets',
      clickable: true,
    },
    navigation: {
      nextEl: '.js-slider-images .swiper-button-next',
      prevEl: '.js-slider-images .swiper-button-prev',
    },
  });

  // Header
  $(window).on('scroll', function() {
    const $html = $('html'),
          $this = $(this);
    
    if ($this.scrollTop() != 0) {
      $html.addClass('is-active-header')
    } else {
      $html.removeClass('is-active-header')
    }
  });

  // Remove action
  $('.js-no-action').on('click', function(e) {
    e.preventDefault();
  });

  // Menu mobile
  $('.js-menu-mobile').on('click', function(e) {
    const $html = $('html');

    $html.toggleClass('is-active-menu');
  });

  // Goto
  $('.js-goto').on('click', function(e) {
    e.preventDefault();
    const id = $(this).attr('href');
    $('html').animate({scrollTop: $(id).offset().top - 100}, 'slow')
  });

  // Animeted on scroll
  $(window).on('scroll', function() {
    const winHeight = $(this).innerHeight(),
          winScroll = $(this).scrollTop() + winHeight;

    $('.js-animated').each(function() {
      const $this = $(this),
            elTop = $this.offset().top;

      if(winScroll >= elTop + winHeight / 3) {
        $this.addClass('is-visible');
      }
    });
  });

  // Animated start
  function start() {
    $('.js-animated-start').addClass('is-visible');
  }

  start();

  // MASKED INPUT
  $(".js-data").mask("99/99/9999");
  $(".js-cpf").mask("999.999.999-99");
  $(".js-cep").mask("99999-999");
  $(".js-cnpj").mask("99.999.999/9999-99");
  $('.js-phone').focusout(function(){
    var phone, element;
    element = $(this);
    element.unmask();
    phone = element.val().replace(/\D/g, '');
    if(phone.length > 10) {
      element.mask("(99) 99999-999?9");
    } else {
      element.mask("(99) 9999-9999?9");
    }
  }).trigger('focusout');

});