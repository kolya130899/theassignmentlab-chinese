// CUSTOM SELECT OPEN
$(".custom-form-element__select--menu").hide();

$(document).on("click", ".custom-form-element__select", function () {
  if ($(this).hasClass("active")) {
    $(this).removeClass("active");
    $(this).next().slideUp();
  } else {
    $(".custom-form-element__select").removeClass("active");
    $(".custom-form-element__select--menu").slideUp(300);
    $(this).addClass("active");
    $(this).next().slideDown();
  }
});

$(document).click(function (e) {
  if (
    !$(e.target).hasClass("custom-form-element__select--menu") &&
    !$(e.target).hasClass("custom-form-element__select")
  ) {
    $(".custom-form-element__select").removeClass("active");
    $(".custom-form-element__select--menu").slideUp(300);
  }
});

// OPEN DESKTOP SUBNAVBAR
$(".header__navbar--subnavbar").hide();
$(document).on("click", "#open-subnavbar", function (e) {
  e.preventDefault();
  $(this).toggleClass("opened");
  $(".header__navbar--subnavbar").slideToggle(300);
});
$(document).click(function (e) {
  if (
    e.target.id !== "open-subnavbar" &&
    !$(e.target).hasClass(".header__navbar--subnavbar")
  ) {
    $("#open-subnavbar").removeClass("opened");
    $(".header__navbar--subnavbar").slideUp();
  }
});

// OPEN MOBILE NAVBAR
$(".header__navbar-mobile").hide();
$(document).on("click", ".header__toggler", function () {
  $(this).toggleClass("opened");
  $(".header__navbar-mobile").slideToggle(300);
});

// OPEN MOBILE SUBNAVBAR
$(".header__navbar-mobile--subnavbar").hide();
$(document).on("click", "#open-mobile-subnavbar", function () {
  $(this).toggleClass("opened");
  $(".header__navbar-mobile--subnavbar").slideToggle(300);
});
