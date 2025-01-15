// Smooth scrolling effect between sections
const sections = document.querySelectorAll('.hero, .second-section');
let currentIndex = 0;

// Smooth scroll behavior
window.addEventListener("scroll", () => {
    const heroSection = document.querySelector(".hero");
    const secondSection = document.querySelector(".second-section");

    if (window.scrollY > heroSection.offsetHeight - 50) {
        secondSection.style.display = "block";
        heroSection.style.display = "none";
    } else {
        secondSection.style.display = "none";
        heroSection.style.display = "block";
    }
});

// Manual navigation with arrows or buttons
function navigateSection(direction) {
    if (direction === "next") {
        currentIndex = currentIndex < sections.length - 1 ? currentIndex + 1 : 0;
    } else {
        currentIndex = currentIndex > 0 ? currentIndex - 1 : sections.length - 1;
    }
    sections[currentIndex].scrollIntoView({ behavior: 'smooth', block: 'start' });
}
