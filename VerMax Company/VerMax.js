// script.js
document.addEventListener("DOMContentLoaded", () => {
    const intro = document.getElementById("intro");
    
    // Opcional: Ocultar la animación después de completarse
    setTimeout(() => {
        intro.style.display = "none";
        // Aquí puedes cargar el contenido principal de tu página.
        document.body.style.overflow = "auto";
    }, 3000); // Cambia el tiempo según la duración de la animación
});
