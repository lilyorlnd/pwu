let hamburger = document.querySelector('.hamburger');
let navLinks = document.getElementById('nav-links');
let links = document.querySelectorAll('.links');

//display links onClick on Hamburger//
hamburger.addEventListener('click', () => {
    navLinks.classList.toggle('hide');
    hamburger.classList.toggle('lines-rotate');
});

//hide navlink container onclick any single link
for (let i = 0; i < links.length; i++){
    links[i].addEventListener('click', () => {
        navLinks.classList.toggle('hide');
    });
}