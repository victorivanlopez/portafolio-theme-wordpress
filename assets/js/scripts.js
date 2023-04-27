
document.addEventListener('DOMContentLoaded', () => {
    sectionScroll();
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
}