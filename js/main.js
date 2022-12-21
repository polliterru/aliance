const navbar = document.querySelector('.navbar')

window.addEventListener('scroll', function() {
  if (window.scrollY > 99) {
    navbar.classList.add('navbar-light')
  } else {
    navbar.classList.remove('navbar-light')
  }
})