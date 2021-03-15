// CUSTOM SELECT TOGGLE
function toggleDropdownMenu() {
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
}

function toggleDropdownMenuOnDocumentClick() {
  $(document).click(function (e) {
    if (
      !$(e.target).hasClass("custom-form-element__select--menu") &&
      !$(e.target).hasClass("custom-form-element__select")
    ) {
      $(".custom-form-element__select").removeClass("active");
      $(".custom-form-element__select--menu").slideUp(300);
    }
  });
}
// end CUSTOM SELECT TOGGLE

// OPEN DESKTOP SUBNAVBAR

function toggleSubnavbar() {
  $(document)
    .off()
    .on("click", function (e) {
      var target = $(e.target);
      if (target.attr("id") === "open-subnavbar") {
        e.preventDefault();
        if (!target.hasClass("opened")) {
          target.addClass("opened");
          $(".header__navbar--subnavbar").slideDown(300);
        } else {
          target.removeClass("opened");
          $(".header__navbar--subnavbar").slideUp(300);
        }
      } else {
        if (
          !target.hasClass("header__navbar--subnavbar") &&
          !target.parent().hasClass("header__navbar--subnavbar")
        ) {
          $("#open-subnavbar").removeClass("opened");
          $(".header__navbar--subnavbar").slideUp(300);
        }
      }
    });
}

// OPEN MOBILE NAVBAR
function openMobileNavbar() {
  $(document).on("click", ".header__toggler", function () {
    $(this).toggleClass("opened");
    $(".header__navbar-mobile").toggleClass("active");
    // $(".header__navbar-mobile").slideToggle(300);
    if (!$(this).hasClass("opened")) {
      $(".header__navbar-mobile--subnavbar").slideUp();
      $("#open-mobile-subnavbar").removeClass("opened");
    }
  });
}

// OPEN MOBILE SUBNAVBAR
function openMobileSubnavbar() {
  $(".header__navbar-mobile--subnavbar").hide();
  $(document).on("click", "#open-mobile-subnavbar", function () {
    $(this).toggleClass("opened");
    $(".header__navbar-mobile--subnavbar").slideToggle(300);
  });
}

// FADE IN/OUT HEADER ON SCROLL
function fadeHeaderOnSctoll() {
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
}

// REDIRECT TO CHECKOUT ON HERO FORM SUBMIT
function redirectOnPreorderFormSubmit() {
  $(document).on("click", ".submit-btn", function () {
    window.location.href = "/checkout?form=order-details";
  });
}

// DATE INPUT TYPE CHANGE
function dateInputTypeChange() {
  $(document).on("focus", "#date-input", function () {
    console.log(this);
    $(this).attr("type", "date");
  });
}

// SET ACTIVE LINK IN HEADER NAVBAR
function switchActiveHeaderLink() {
  var desktopLinks = document.querySelectorAll(".js-header-link");

  desktopLinks.forEach(function (item) {
    if (item.getAttribute("href") === window.location.pathname) {
      item.classList.add("active-page");
    } else {
      if (item.classList.contains("active-page")) {
        item.classList.remove("active-page");
      }
    }
  });
}

// TOGGLE CUSTOM SELECT
function toggleSelect() {
  $(".select").on("click", function (e) {
    e.stopImmediatePropagation();
    $(".options").slideUp(300, function () {
      $(this).prev().removeClass("active");
    });

    $(this).toggleClass("active");
    if ($(this).hasClass("active")) {
      $(this).next(".options").slideDown(300);
    } else {
      $(this).next(".options").slideUp(300);
    }
  });
  $(document).on("click", function (e) {
    e.stopImmediatePropagation();
    $(".select.active")
      .next(".options")
      .slideUp(300, function () {
        $(this).prev().removeClass("active");
      });
  });
}

// HANDLE SELECT DROPDOWN OPTION
function selectCustomSelectOption() {
  $(".options").on("click", function (e) {
    e.stopImmediatePropagation();

    if ($(e.target).hasClass("options__item")) {
      var select = $(this).prev();
      select
        .find(".select__value")
        .text($(e.target).text())
        .removeClass("default");
      $(this).slideUp(300, function () {
        select.removeClass("active");
      });

      var name = select.data("name");

      $("input[name=" + name + "]").val($(e.target).text());
    }
  });
}

// SWITCH AUTHENTIFICATION FORMS
function handleRadioButtonChange() {
  $(".auth-toggler__item").on("click", function (e) {
    e.stopImmediatePropagation();
    var inputId = $(this).find("input").attr("id");
    if (inputId === "registration") {
      $(".registration-info").show();
      $(".page-btn--auth")
        .removeClass("js-login-btn")
        .addClass("js-register-btn");
    } else {
      $(".registration-info").hide();
      $(".page-btn--auth")
        .removeClass("js-register-btn")
        .addClass("js-login-btn");
    }
  });
}

$(document).ready(function () {
  toggleDropdownMenu();
  toggleDropdownMenuOnDocumentClick();
  toggleSubnavbar();
  openMobileNavbar();
  openMobileSubnavbar();
  fadeHeaderOnSctoll();
  redirectOnPreorderFormSubmit();
  dateInputTypeChange();
  switchActiveHeaderLink();
  toggleSelect();
  selectCustomSelectOption();
  handleRadioButtonChange();
});
