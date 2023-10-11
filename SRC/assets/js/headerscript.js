// Function mở menu
(() => {
  'use strict'

  document.querySelector('#navbarSideCollapse').addEventListener('click', () => {
    document.querySelector('.offcanvas-collapse').classList.toggle('open')
  })
})()

// function chạy active

var menuLinks = document.querySelectorAll('#header .nav-item .nav-link')
var navLink = window.location.href

for (let i = 0; i<menuLinks.length;i++){
  if(menuLinks[i] == navLink){
    menuLinks[i].classList.add('active');
  }
}
