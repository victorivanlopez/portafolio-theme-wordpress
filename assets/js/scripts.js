
document.addEventListener('DOMContentLoaded', () => {
    sectionScroll();
    menuBurger();
    typedHeading();
});

function sectionScroll() {
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('.menu-principal a');

    window.addEventListener('scroll', () => {
        sections.forEach( (section, index) => {
            const rect = section.getBoundingClientRect();
            if (rect.top <= 0 && rect.bottom > 0) {
                navLinks.forEach(navLink => {
                    navLink.classList.remove('active');
                });
                navLinks[index].classList.add('active');
            };
        });
    });
};

function menuBurger() {
    const hamburger = document.querySelector('.hamburguer-menu svg');
    hamburger.addEventListener('click', () => {
        const menuMovil = document.querySelector('#menuMovil');
        menuMovil.classList.toggle('mostrar-menu');
    });
};

function typedHeading() {
    const element = document.querySelector('#element');

    if(element) {
        const typed = new Typed('#element', {
            strings: [
                'Front-end'
            ],
            typeSpeed: 100,
            backSpeed: 30,
            backDelay: 3000,
            loop: true
          });
    };
};