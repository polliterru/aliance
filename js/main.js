const navbar = document.querySelector(".navbar");
const logo = document.querySelector(".logo-svg use");
const mobileMenuToggle = document.querySelector(".js-mobile-menu-toggle");
const mobileMenu = document.querySelector(".mobile-menu");
const isMainPage = document.body.classList.contains('main-page');
// создать константу isMainPage 
// она будет проверять наличие класса у body ВЕРНЕТ TRUE ИЛИ FALSE !!!!!!!!!!!

const LightModeOn = () => {
  navbar.classList.add("navbar-light"); // logo replace вынести в css
};
const LightModeOff = () => {
  navbar.classList.remove("navbar-light"); // logo replace вынести в css
};

const changeNavHeight = (height) => {
  navbar.style.height = height;
};
// ф-я замены высоты

window.addEventListener("scroll", () => {
  window.scrollY > 99 ? changeNavHeight('72px') : changeNavHeight('94px'); // вызывать ф-ю замены высоты
  if(isMainPage) {
    window.scrollY > 99 ? LightModeOn() : LightModeOff();
  }
  // проверка isMainPage 
  // если TRUE то вызывать функцию переключения классов (добавление или удаление)
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
const modal = document.querySelector('.modal');
const modalDialog = document.querySelector('.modal-dialog');

document.addEventListener('click', (event) => {
  if (
    event.target.dataset.toggle == 'modal' ||
    event.target.parentNode.dataset.toggle == 'modal' ||
    (!event.composedPath().includes(modalDialog) && 
      modal.classList.contains('is-open'))
  ) {
    modal.classList.toggle('is-open');
  }
});

document.addEventListener('keyup', (event) => {
  if (event.key == 'Escape' && modal.classList.contains('is-open')) {
    modal.classList.toggle('is-open');
  }
});