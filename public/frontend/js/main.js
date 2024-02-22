(function ($) {
  "user strict";

   // preloader
   $(window).on('load', function () {
    $('.preloader').fadeOut(1000);
    var img = $('.bg_img');
    img.css('background-image', function () {
      var bg = ('url(' + $(this).data('background') + ')');
      return bg;
    });
  });

//Create Background Image
(function background() {
  let img = $('.bg_img');
  img.css('background-image', function () {
    var bg = ('url(' + $(this).data('background') + ')');
    return bg;
  });
})();

// nice-select
$("select").niceSelect()


jQuery(function(){
  jQuery("#bgndVideo").YTPlayer();
});


// header-fixed
var fixed_top = $(".header-section");
$(window).on("scroll", function(){
    if( $(window).scrollTop() > 100){  
        fixed_top.addClass("animated fadeInDown header-fixed");
    }
    else{
        fixed_top.removeClass("animated fadeInDown header-fixed");
    }
});

// navbar-click
$(".navbar li a").on("click", function () {
  var element = $(this).parent("li");
  if (element.hasClass("show")) {
    element.removeClass("show");
    element.children("ul").slideUp(500);
  }
  else {
    element.siblings("li").removeClass('show');
    element.addClass("show");
    element.siblings("li").find("ul").slideUp(500);
    element.children('ul').slideDown(500);
  }
});

//sidebar Menu
$(document).on('click', '.sidebar-collapse-icon', function () {
  $('.page-container').toggleClass('show');
});

// Mobile Menu
$('.sidebar-mobile-menu').on('click', function (e) {
  e.preventDefault();
  if($('.sidebar-menu').hasClass('active')) {
    $('.sidebar-menu').removeClass('active');
    $('.body-overlay').removeClass('active');
  }else {
    $('.sidebar-menu').addClass('active');
    $('.body-overlay').addClass('active');
  }
});
$('#body-overlay').on('click', function (e) {
  e.preventDefault();
  $('.sidebar-menu').removeClass('active');
  $('.body-overlay').removeClass('active');
});

// img-up
$('.imgUp').click(function () {
  upload();
});
function upload() {
  $(".upload").change(function () {
    readURL(this);
  });
}
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader(); reader.onload = function (e) {
      var preview = $(input).parents('.profile-thumb-area').find('.image-preview');
      $(preview).css('background-image', 'url(' + e.target.result + ')');
      $(preview).hide();
      $(preview).fadeIn(650);
    }
    reader.readAsDataURL(input.files[0]);
  }
}

//acoount-toggle
$('.header-account-btn').on('click', function (e) {
  e.preventDefault();
  $('.account').addClass('active');
  $('.body-overlay').addClass('active');
});
$('#body-overlay').on('click', function (e) {
  e.preventDefault();
  $('.account').removeClass('active');
  $('.body-overlay').removeClass('active');
});
$('.account-cross-btn').on('click', function (e) {
  e.preventDefault();
  $('.account').removeClass('active');
  $('.body-overlay').removeClass('active');
});
$('.remove-account').on('click', function (e) {
  e.preventDefault();
  $(this).parent().parent().hide(300);
});
$('.account-control-btn').on('click', function () {
  $('.account-wrapper').toggleClass('change-form');
})

// faq
$('.faq-wrapper .faq-title').on('click', function (e) {
  var element = $(this).parent('.faq-item');
  if (element.hasClass('open')) {
    element.removeClass('open');
    element.find('.faq-content').removeClass('open');
    element.find('.faq-content').slideUp(300, "swing");
  } else {
    element.addClass('open');
    element.children('.faq-content').slideDown(300, "swing");
    element.siblings('.faq-item').children('.faq-content').slideUp(300, "swing");
    element.siblings('.faq-item').removeClass('open');
    element.siblings('.faq-item').find('.faq-title').removeClass('open');
    element.siblings('.taq-item').find('.faq-content').slideUp(300, "swing");
  }
});


// slider
var swiper = new Swiper('.testimonial-slider', {
  slidesPerView: 2,
  spaceBetween: 30,
  loop: true,
  navigation: {
    nextEl: '.slider-next',
    prevEl: '.slider-prev',
  },
  autoplay: {
    speeds: 1000,
    delay: 2000,
  },
  speed: 1000,
  breakpoints: {
    991: {
      slidesPerView: 2,
    },
    767: {
      slidesPerView: 1,
    },
    575: {
      slidesPerView: 1,
    },
  }
});

// slider
var swiper = new Swiper('.brand-slider', {
  slidesPerView: 6,
  spaceBetween: 0,
  loop: true,
  autoplay: {
    speeds: 1000,
    delay: 2000,
  },
  speed: 1000,
  breakpoints: {
    1399: {
      slidesPerView: 4,
    },
    1199: {
      slidesPerView: 3,
    },
    991: {
      slidesPerView: 3,
    },
    767: {
      slidesPerView: 2,
    },
    575: {
      slidesPerView: 1,
    },
  }
});


// video
$(window).on('load', function () {
  $("a[data-rel^=lightcase]").lightcase();
  })

  if ($(".statistics-item").length) {
$(".statistics-item").each(function () {
  $(this).isInViewport(function (status) {
    if (status === "entered") {
      for (var i = 0; i < document.querySelectorAll(".odometer").length; i++) {
        var el = document.querySelectorAll('.odometer')[i];
        el.innerHTML = el.getAttribute("data-odometer-final");
      }
    }
  });
});
}

// input toggle
$("#visa").click(function(){
  $(".card-form").addClass('active');
});
$("#paypal").click(function(){
  $(".card-form").removeClass('active');
});
$("#skrill").click(function(){
  $(".card-form").removeClass('active');
});

$('.navbar-toggler').on('click', function (e) {
  e.preventDefault();
  if($('.navbar-collapse').hasClass('show')) {
    $('.navbar-collapse').removeClass('show');
    $('.body-overlay').removeClass('active');
  }else {
    $('.navbar-collapse').addClass('show');
    $('.body-overlay').addClass('active');
    $('.header-section').addClass('active');
  }
});
$('#body-overlay').on('click', function (e) {
  e.preventDefault();
  $('.navbar-collapse').removeClass('show');
  $('.body-overlay').removeClass('active');
  $('.header-section').removeClass('active');
});


$(document).on('click', '.light-dark-btn', function () {
  $(".page-container-wrapper").toggleClass("dark-mode");
});

$('.pack-radio').change(function(){
  if($(this).is(":checked")) {
    $(".premium-area").toggleClass('active');
  }
});

})(jQuery);