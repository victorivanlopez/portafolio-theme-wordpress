let tab = 1;

document.addEventListener('DOMContentLoaded', () => {
    sectionScroll();
    menuBurger();
    typedHeading();
    scrollSmooth();
    mostrarSeccion();
    tabs();

    const enlaceInicio = document.querySelector('.menu-principal a');
    enlaceInicio.classList.add('active');
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

function tabs() {
    const botones = document.querySelectorAll('.tabs button');
    botones.forEach(boton => {
        boton.addEventListener('click', e => {
            tab = parseInt(e.target.dataset.tab);
            mostrarSeccion();
        });
    });
};

function mostrarSeccion() {
    const seccion = document.querySelector(`#tab-${tab}`);
    const seccionAnterior = document.querySelector('.mostrar');

    if(seccionAnterior) {
        seccionAnterior.classList.remove('mostrar');
    };
    seccion.classList.add('mostrar');

    const tabActual = document.querySelector(`[data-tab="${tab}"]`);
    const tabAnterior = document.querySelector('.actual');

    if(tabAnterior) {
        tabAnterior.classList.remove('actual');
    };
    tabActual.classList.add('actual');
};