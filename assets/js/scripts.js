
document.addEventListener('DOMContentLoaded', () => {
    sectionScroll();
    menuBurger();
    typedHeading();
    scrollSmooth();
});

function sectionScroll() {
    const sections = document.querySelectorAll('.scroll');
    const enlaces = document.querySelectorAll('.menu-principal a');

    window.addEventListener('scroll', () => {
        sections.forEach( (section, index) => {
            const rect = section.getBoundingClientRect();
            if (rect.top < 400) {
                enlaces.forEach(enlace => {
                    enlace.classList.remove('active');
                });
                enlaces[index].classList.add('active');
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

function scrollSmooth() {
    const enlaces = document.querySelectorAll('.smooth a');
    enlaces.forEach( enlace => {
        enlace.addEventListener('click', e => {
            e.preventDefault(); 
            
            const seccionScroll = enlace.attributes.href.value;
            const seccion = document.querySelector(seccionScroll); 
            seccion.scrollIntoView({block: "start", behavior: "smooth"});
        });
    });
};