let tab = 1;

document.addEventListener('DOMContentLoaded', () => {
    scrollSpy();
    menuBurger();
    typedHeading();
    mostrarSeccionTab();
    tabs();
});

function scrollSpy() {
    const secciones = document.querySelectorAll('.scroll');
    const enlaces = document.querySelectorAll('.menu a');

    const callback = (entries) => {
        entries.forEach((entry) => {
            if(entry.isIntersecting) {
                const idObserver = `#${entry.target.id}`;
                
                enlaces.forEach((enlace) => {
                    const idEnlace = enlace.attributes.href.value;
                    enlace.classList.remove('active');
                    
                    if(idEnlace === idObserver) {
                        enlace.classList.add('active');
                    };
                });
            };
        });
    };
    
    const observer = new IntersectionObserver(callback, {
        rootMargin: '0px',
        threshold: 0.5
    });

    secciones.forEach((seccion) => observer.observe(seccion));
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

function tabs() {
    const botones = document.querySelectorAll('.tabs button');
    botones.forEach(boton => {
        boton.addEventListener('click', e => {
            tab = parseInt(e.target.dataset.tab);
            mostrarSeccionTab();
        });
    });
};

function mostrarSeccionTab() {
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