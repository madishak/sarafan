// Mobile menu
(() => {

const hamburgerBtn = document.querySelector(".header__btn--hamburger");
const dropDownMenu = document.querySelector(".header__dropdown-menu");
let show = false;

hamburgerBtn.addEventListener("click", () => {
  if (!show) {
    dropDownMenu.style.display = "block";
    hamburgerBtn.classList.toggle("header__btn--close");
    show = true;
    hamburgerBtn.classList.toggle("header__btn--hamburger");
  } else {
    dropDownMenu.style.display = "none";
    hamburgerBtn.classList.toggle("header__btn--hamburger")
    show = false;
    hamburgerBtn.classList.toggle("header__btn--close");
  }
})

})();


  // Slider

  (($) => {
    $(".slider").slick({
      dots: true,
      infinite: false,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 4,
      appendArrows: $(".slider__arrows"),
      appendDots: $(".slick-dots"),
      prevArrow: $(".slider__prev-arrow"),
      nextArrow: $(".slider__next-arrow"),
      responsive: [
        {
          breakpoint: 1761,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true,
          },
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 2,
          },
        },
        {
          breakpoint: 320,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
      ],
    });
  }
)(jQuery);
