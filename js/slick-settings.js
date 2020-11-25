$(document).ready(function () {
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

  $(".testimonials__slider").slick({
    centerMode: true,
    centerPadding: "80px",
    variableWidth: true,
    infinite: true,
    slidesToShow: 3,
    prevArrow: $(".testi-prev-btn"),
    nextArrow: $(".testi-next-btn"),
  });
});
