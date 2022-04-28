// Gets all the necessary elements from the DOM to toggle the mobile menu on and off
const offcanvas = document.querySelector('.offcanvas')
const body = document.querySelector('body')
const cover = document.getElementById('cover')
const menuButton = document.getElementById('menu-icon')

//Scrolls page to the top and toggles the necessary classes
//to the body, the cover element and the menu 
//to show and hide the menu.

const toggleMenu = () => {
  window.scrollTo({ top: 0, behavior: 'smooth' })
  body.classList.toggle('body--offcanvas')
  offcanvas.classList.toggle('offcanvas--show')
  cover.classList.toggle('cover--show')
}

// Adds event listeners to the menu button and the cover element to toggle the menu
menuButton.addEventListener('click', toggleMenu)
cover.addEventListener('click', toggleMenu)