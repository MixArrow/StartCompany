// Selección de las secciones para navegación
const sections = document.querySelectorAll('.section');
const arrows = document.querySelectorAll('.arrow');
let currentIndex = 0;

// Función para mostrar una sección específica
function showSection(index) {
    sections.forEach((section, i) => {
        section.style.display = i === index ? 'block' : 'none';
    });
    currentIndex = index;
}

// Manejo de flechas para navegar
arrows.forEach((arrow) => {
    arrow.addEventListener('click', (e) => {
        if (e.target.classList.contains('left-arrow')) {
            currentIndex = currentIndex > 0 ? currentIndex - 1 : sections.length - 1;
        } else {
            currentIndex = currentIndex < sections.length - 1 ? currentIndex + 1 : 0;
        }
        showSection(currentIndex);
    });
});

// Navegación con teclado
window.addEventListener('keydown', (e) => {
    if (e.key === 'ArrowLeft') {
        currentIndex = currentIndex > 0 ? currentIndex - 1 : sections.length - 1;
    } else if (e.key === 'ArrowRight') {
        currentIndex = currentIndex < sections.length - 1 ? currentIndex + 1 : 0;
    }
    showSection(currentIndex);
});

// Scroll entre secciones
window.addEventListener('scroll', () => {
    const scrollY = window.scrollY;
    sections.forEach((section, index) => {
        const offsetTop = section.offsetTop;
        const offsetHeight = section.offsetHeight;
        if (scrollY >= offsetTop && scrollY < offsetTop + offsetHeight) {
            currentIndex = index;
        }
    });
});

// Inicializar mostrando la primera sección
showSection(0);
