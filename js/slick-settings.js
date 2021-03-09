function initiateBlogSlider() {
  $(".blog__slider").slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    prevArrow: $(".prev-btn"),
    nextArrow: $(".next-btn"),
    responsive: [
      {
        breakpoint: 1000,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 750,
        settings: {
          slidesToShow: 1,

          prevArrow: "",
          nextArrow: "",
          dots: true,
        },
      },
    ],
  });
}

function initiateTestimonialsSlider() {
  $(".iphone-image").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    asNavFor: ".testimonials__slider",
    fade: true,
  });
  $(".testimonials__slider").slick({
    centerMode: true,
    variableWidth: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: ".iphone-image",
    focusOnSelect: true,

    prevArrow: $(".testi-prev-btn"),
    nextArrow: $(".testi-next-btn"),
  });
  // $(".testimonials__slider").slick({
  // centerMode: true,
  // infinite: true,
  // slidesToShow: 3,
  // prevArrow: $(".testi-prev-btn"),
  // nextArrow: $(".testi-next-btn"),
  // });
}

function toggleActiveSlideStyles() {
  $(".testi-next-btn").click(function () {
    $(".testimonials__slider").on(
      "beforeChange",
      function (event, slick, currentSlide, nextSlide) {
        $(".testimonials__slider--slide").each(function () {
          $(this).removeClass("active-current");
        });
        $(".slick-center").next().addClass("active-current");
      }
    );
  });

  $(".testi-prev-btn").click(function () {
    $(".testimonials__slider").on(
      "beforeChange",
      function (event, slick, currentSlide, nextSlide) {
        $(".testimonials__slider--slide").each(function () {
          $(this).removeClass("active-current");
        });
        $(".slick-center").prev().addClass("active-current");
      }
    );
  });
}

$(document).ready(function () {
  initiateBlogSlider();
  initiateTestimonialsSlider();
  toggleActiveSlideStyles();
});
