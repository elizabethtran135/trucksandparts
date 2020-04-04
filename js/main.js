console.log('This works!');

const hamburgerButton = document.getElementById('hamburger');
const navMenu = document.querySelector('.mobile-nav');

function toggleMenu(){
  navMenu.classList.toggle('show-mobile-nav');
}

hamburgerButton.addEventListener('click', toggleMenu);
console.log('Button click works!');
console.log(navMenu);
