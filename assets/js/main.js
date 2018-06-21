$(document).ready(function () {
  $('.search-top-nav').click(function () {
    $('#searchform').toggle(200);
  });
  $('#comment').attr('placeholder', 'Comment');
  /* header carousel */
  var headerSwiper = new Swiper('.header-carousel', {
    sliderPerView: 1,
    loop: true,
    navigation: {
      nextEl: '.header-carousel-next',
      prevEl: '.header-carousel-prev',
    },
  });
  /* news carousel*/
  var newsSwiper = new Swiper('.news-carousel-wrapper', {
    slidesPerView: 2,
    loop: true,
    navigation: {
      nextEl: '.news-carousel-next',
      prevEl: '.news-carousel-prev'
    }
  });
  /* editorials carousel */
  var editorialsSwiper = new Swiper('.editorials-slider-wrapper', {
    slidesPerView: 1,
    loop: true,
    navigation: {
      nextEl: '.editorials-carousel-next',
      prevEl: '.editorials-carousel-prev'
    }
  });
  /* local nwes carousel */
  var localNewsSwiper = new Swiper('.local-news-slider-wrapper', {
    slidesPerView: 1,
    loop: true,
    navigation: {
      nextEl: '.local-news-carousel-next',
      prevEl: '.local-news-carousel-prev'
    }
  });
  // category slider

  var categorySlider = new Swiper('.category-carousel', {
    slidesPerView: 1,
    loop: true,
    navigation: {
      nextEl: '.category-carousel-next',
      prevEl: '.category-carousel-prev'
    }
  })

  // sidebar 
  sidebar();
  //post slider

  var postSlider = new Swiper('.post-slider-wrapper', {
    slidesPerView: 1,
    loop: false,
    navigation: {
      nextEl: '.post-slider-next',
      prevEl: '.post-slider-prev'
    }
  });
  var galleryThumbs = new Swiper('.gallery-thumbs', {
    spaceBetween: 15,
    centeredSlides: true,
    slidesPerView: "auto",
    loop: false,
    slideToClickedSlide: true,
  });
  $('.galleryThumbs:nth-child(1)').addClass('swiper-slide-active');
  postSlider.controller.control = galleryThumbs;
  galleryThumbs.controller.control = postSlider;

  // lightbox
  lightbox();
});

function sidebar() {
  $active = $('.sidebar-active');

  $('.sidebar-header a').click(function (event) {
    event.preventDefault();
    $prevVal = $('.sidebar-active').attr('data-type');
    $clickedVal = $(this).attr('data-type');
    $('#' + $prevVal + '-feed').css({
      'display': 'none'
    });
    $('#' + $clickedVal + '-feed').css({
      'display': 'block'
    })
    $('.sidebar-header a').removeClass('sidebar-active');
    $(this).addClass('sidebar-active');
  });
}

function lightbox() {
  var lightboxActive = false;
  $('.slider-post').click(function () {
    var $bgImg = $(this).css('background-image');
    $bgImg = $bgImg.replace('url(', '').replace(')', '').replace(/\"/gi, "");
    $('.lightbox').css({
      backgroundImage: 'url("' + $bgImg + '")'
    });
    // add title and url to lightbox
    $title = $(this).attr('title');
    $link = $(this).attr('url');
    $('.lightbox-title').text($title);
    $('.lightbox-read-more').attr('href', $link);
    $('.black-overlay').show();
    lightboxActive = true;
    if (lightboxActive) {
      $('.black-overlay').click(function () {
        $(this).hide();
      });
    }
  });
}