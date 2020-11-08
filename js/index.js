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
  if (!$(this).hasClass("opened")) {
    $(".header__navbar-mobile--subnavbar").slideUp();
    $("#open-mobile-subnavbar").removeClass("opened");
  }
});

// OPEN MOBILE SUBNAVBAR
$(".header__navbar-mobile--subnavbar").hide();
$(document).on("click", "#open-mobile-subnavbar", function () {
  $(this).toggleClass("opened");
  $(".header__navbar-mobile--subnavbar").slideToggle(300);
});

// FADE IN/OUT HEADER ON SCROLL
$(window).scroll(function () {
  let scrollPosition = $(window).scrollTop();
  let headerHeight = $(".main-page-header").innerHeight();
  let scrollHeight = 200;

  if (scrollPosition > headerHeight * 0.43 && scrollPosition < scrollHeight) {
    let opacity = scrollPosition / scrollHeight;
    let fixedOpacity = opacity.toFixed(2);

    $(".main-page-header").css(
      "background",
      "rgba(0,0,0," + fixedOpacity + ")"
    );
  }
  if (scrollPosition > scrollHeight) {
    $(".main-page-header").css("background", "rgba(0,0,0,1)");
  }
  if (scrollPosition < 20) {
    $(".main-page-header").css("background", "rgba(0,0,0,.2)");
  }
});

// REDIRECT ON SUBMIT BUTTON CLICK
$(document).on("click", ".submit-btn", function () {
  window.location.href = "/order-form";
});

// DATE INPUT TYPE CHANGE
$(document).on("focus", "#date-input", function () {
  console.log(this);
  $(this).attr("type", "date");
});

// HIDE NOT ACTIVE FORM
if ($(".form-section__body")) {
  $(".reg-forms-toggler > input").each(function () {
    if ($(this).attr("checked")) {
      var formID = $(this).attr("id");
      console.log(formID);
      $("#" + formID + "-form").addClass("active-reg");
    }
  });

  $(document).on("click", ".reg-forms-toggler > input", function () {
    // console.log("click");
    // if (!$(this).attr("checked")) {
    $(".active-reg").removeClass("active-reg");

    var formID = $(this).attr("id");
    $("#" + formID + "-form").addClass("active-reg");
    // }
  });

  $("form").submit(function () {
    $(".form-section__body--order-form").removeClass("active");
  });
}

$(".order-form__submit.order").click(function () {
  console.log($("#order-form"));
  $("#order-form").removeClass("active-form");
  $(".reg-form").addClass("active-form");
  $(".form-section__progressbar").children(".block").eq(1).addClass("active");
  $(".form-section__progressbar")
    .children(".block-text")
    .eq(1)
    .addClass("active");
});
$(".order-form__submit.registration").click(function () {
  $(".reg-form").removeClass("active-form");
  $(".payment-form").addClass("active-form");
  $(".form-section__progressbar").children(".block").eq(2).addClass("active");
  $(".form-section__progressbar")
    .children(".block-text")
    .eq(2)
    .addClass("active");
});

$(document).on("click", ".close-modal", function () {
  $(".form-section__body--modal").hide();
});

$(document).on("click", ".card-submit", function () {
  $(".form-section__body--modal").css("display", "flex");
});
