const navbar = document.querySelector('.navbar')
const logo = document.querySelector('.logo-svg use')
const mobileMenuToggle = document.querySelector('.js-mobile-menu-toggle')
const mobileMenu = document.querySelector('.mobile-menu')

console.log(navbar);
console.log(logo);
console.log(mobileMenuToggle);
console.log(mobileMenu);

const addNavbarLight = () => {
  navbar.classList.add('navbar-light')
  logo.href.baseVal = 'img/sprite.svg#logo'
}
const removeNavbarLight = () => {
  navbar.classList.remove('navbar-light')
  logo.href.baseVal = 'img/sprite.svg#logo-light'
}

window.addEventListener('scroll', () => {
  window.scrollY > 99 ? addNavbarLight() : removeNavbarLight()
})

mobileMenuToggle.addEventListener('click', () => {
  mobileMenuToggle.classList.toggle('close-menu')
  mobileMenu.classList.toggle('is-open')
  document.documentElement.classList.toggle('no-scroll')
  document.body.classList.toggle('no-scroll')
  addNavbarLight()

  if (!mobileMenu.classList.contains('is-open') && window.scrollY === 0) {
    removeNavbarLight()
  }
})

const swiperFeatures = new Swiper('.swiper-features', {
  speed: 400,
  autoHeight: true,
  loop: true,
  navigation: {
    nextEl: '.slider-button-next',
    prevEl: '.slider-button-prev',
  },
  breakpoints: {
    // when window width is >= 576px
    0: {
      slidesPerView: 1,
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
    }
  }
})

const swiperStep = new Swiper('.swiper-step', {
  speed: 400,
  autoHeight: true,
  loop: true,
  navigation: {
    nextEl: '.slider-step-button-next',
    prevEl: '.slider-step-button-prev',
  },
  breakpoints: {
    // when window width is >= 576px
    0: {
      slidesPerView: 1,
    },
    // when window width is >= 768px
    768: {
      slidesPerView: 2,
    },
    // when window width is >= 1024px
    1024: {
      slidesPerView: 4,

    }
  },
})

const checkWidthWindow = () => {
  if (window.matchMedia("(max-width: 1199px)").matches) {
    swiperFeatures.enable()
    swiperStep.enable()
  } else {
    swiperFeatures.disable()
    swiperStep.disable()
  }
}
checkWidthWindow()

window.addEventListener('resize', () => {
  checkWidthWindow()
})
