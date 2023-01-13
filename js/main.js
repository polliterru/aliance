const navbar = document.querySelector(".navbar");
const logo = document.querySelector(".logo-svg use");
const mobileMenuToggle = document.querySelector(".js-mobile-menu-toggle");
const mobileMenu = document.querySelector(".mobile-menu");

const addNavbarLight = () => {
  navbar.classList.add("navbar-light");
  logo.href.baseVal = "img/sprite.svg#logo";
};
const removeNavbarLight = () => {
  navbar.classList.remove("navbar-light");
  logo.href.baseVal = "img/sprite.svg#logo-light";
};

window.addEventListener("scroll", () => {
  window.scrollY > 99 ? addNavbarLight() : removeNavbarLight();
});

mobileMenuToggle.addEventListener("click", () => {
  mobileMenuToggle.classList.toggle("close-menu");
  mobileMenu.classList.toggle("is-open");
  document.documentElement.classList.toggle("no-scroll");
  document.body.classList.toggle("no-scroll");
  addNavbarLight();

  if (!mobileMenu.classList.contains("is-open") && window.scrollY === 0) {
    removeNavbarLight();
  }
});

const swiperFeatures = new Swiper(".swiper-features", {
  speed: 400,
  freeMode: true,
  autoHeight: true,
  navigation: {
    nextEl: ".slider-features-button-next",
    prevEl: ".slider-features-button-prev",
  },
  breakpoints: {
    // when window width is >= 576px
    0: {
      slidesPerView: "auto",
    },
    // when window width is >= 768px
    768: {
      slidesPerView: 3,
    },
    // when window width is >= 1024px
    1024: {
      slidesPerView: 4,
    },
    // when window width is >= 1200px
    1200: {
      slidesPerView: 5,
    },
  },
});

const swiperStep = new Swiper(".swiper-step", {
  speed: 400,
  freeMode: true,
  spaceBetween: 30,
  navigation: {
    nextEl: ".slider-step-button-next",
    prevEl: ".slider-step-button-prev",
  },
  breakpoints: {
    // when window width is >= 576px
    0: {
      slidesPerView: "auto",
    },
    // when window width is >= 768px
    768: {
      slidesPerView: 2,
    },
    // when window width is >= 1024px
    1024: {
      slidesPerView: 3,
    },
    1200: {
      slidesPerView: 4,
    },
  },
});

const checkWidthWindow = () => {
  if (window.matchMedia("(max-width: 1199px)").matches) {
    swiperFeatures.enable();
    swiperStep.enable();
  } else {
    swiperFeatures.disable();
    swiperStep.disable();
  }
};
checkWidthWindow();

window.addEventListener("resize", () => {
  checkWidthWindow();
});

const swiperBlog = new Swiper(".blog-slider", {
  speed: 400,
  freeMode: true,
  spaceBetween: 30,
  navigation: {
    nextEl: ".slider-blog-button-next",
    prevEl: ".slider-blog-button-prev",
  },
  breakpoints: {
    // when window width is >= 768px
    768: {
      slidesPerView: 1,
    },
    // when window width is >= 1200px
    1200: {
      slidesPerView: 2,
    },
  },
});
const modal = document.querySelector(".modal");
const modalDialog = document.querySelector(".modal-dialod");

document.addEventListener("click", (event) => {
  console.log(
    event.target.dataset.toggle == "modal" ||
      event.target.parentNode.dataset.loggle == "modal"
  );
});
