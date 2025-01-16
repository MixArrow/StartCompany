// Navegación entre secciones
function navigateSection(direction) {
    const sections = document.querySelectorAll('section');
    const currentSection = document.querySelector('.current-section');
    let targetIndex = Array.from(sections).indexOf(currentSection);

    if (direction === 'next') {
        targetIndex = (targetIndex + 1) % sections.length;
    } else if (direction === 'prev') {
        targetIndex = (targetIndex - 1 + sections.length) % sections.length;
    }

    currentSection.classList.remove('current-section');
    const targetSection = sections[targetIndex];
    targetSection.classList.add('current-section');
    targetSection.scrollIntoView({ behavior: 'smooth' });
}

// Mostrar segunda sección al hacer scroll hacia abajo
window.addEventListener('scroll', () => {
    const mainSection = document.getElementById('main-section');
    const secondSection = document.getElementById('second-section');

    if (window.scrollY > mainSection.offsetHeight / 2) {
        secondSection.classList.add('active');
        mainSection.classList.remove('current-section');
    } else {
        secondSection.classList.remove('active');
        mainSection.classList.add('current-section');
    }
});

// Flechas de navegación
const leftArrow = document.querySelector('.arrow-left');
const rightArrow = document.querySelector('.arrow-right');

if (leftArrow && rightArrow) {
    leftArrow.addEventListener('click', () => navigateSection('prev'));
    rightArrow.addEventListener('click', () => navigateSection('next'));
}

// Inicializar la sección actual
document.getElementById('main-section').classList.add('current-section');
