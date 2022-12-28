const navbar = document.querySelector('.navbar')
const logo = document.querySelector('.logo-svg use')
const mobileMenuToggle = document.querySelector('.js-mobile-menu-toggle')
const mobileMenu = document.querySelector('.mobile-menu')

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
