const navbar = document.querySelector('.navbar')
const logo = document.querySelector('.logo-svg use')

window.addEventListener('scroll', function() {
  if (window.scrollY > 99) {
    navbar.classList.add('navbar-light')
    logo.href.baseVal = 'img/sprite.svg#logo'
  } else {
    navbar.classList.remove('navbar-light')
    logo.href.baseVal = 'img/sprite.svg#logo-light'
  }
})