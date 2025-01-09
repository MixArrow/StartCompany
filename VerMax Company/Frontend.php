<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VerMax</title>
    <link rel="stylesheet" href="FrontEnd.css">
    <script defer src="VerMax.js"></script>
</head>
<body>
    <!-- Encabezado -->
    <header>
        <div class="navbar">
            <div class="logo">
                <!-- Imagen del Logo -->
                <img src="VerMax Design/Logo.png" alt="VerMax Logo" class="logo-image">
            </div>
            <nav class="menu">
                <!-- Navegación de la página principal -->
                <ul>
                    <li><a href="#history">History &#709;</a></li>
                    <li><a href="#cameras">Cameras &#709;</a></li>
                    <li><a href="#services">Services &#709;</a></li>
                    <li><a href="#" class="special-button" onclick="openModal('employee')">Sign In</a></li>
                    <li><a href="#" class="special-button" onclick="openModal('client')">Clients</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Sección Principal de la Página (Fondo de la Isla) -->
    <section class="hero" id="main-section">
        <!-- Imagen de fondo de la página principal -->
        <div class="background-image">
            <img src="VerMax Design/Casa.png" alt="Hero Background">
        </div>
        <div class="overlay"></div>
        <!-- Imagen de las cámaras centradas -->
        <div class="camera-image">
            <img src="VerMax Design/All cameras.png" alt="Cameras" class="centered-camera">
        </div>
        <!-- Logo centrado con "Company" debajo -->
        <div class="logo-container">
            <img src="VerMax Design/Logo.png" alt="VerMax Logo" class="centered-logo">
            <p class="logo-subtext">Company</p>
        </div>
    </section>

    <!-- Segunda Apariencia -->
    <section class="second-section" id="second-section">
        <div class="second-logo">
            <img src="VerMax Design/Logo.png" alt="VerMax Logo" class="second-logo-image">
        </div>
        <div class="content-wrapper">
            <div class="camera-display">
                <img src="VerMax Design/ModernaCamara.png" alt="Modern Camera" class="modern-camera">
            </div>
            <div class="text-content">
                <h1>Welcome to <span class="highlight">VERMAX</span> LOQ Company</h1>
                <p>Es un líder en soluciones de videovigilancia a nivel mundial. Nos especializamos en la instalación personalizada de sistemas de cámaras de seguridad, adaptándonos a las necesidades únicas de cada cliente.</p>
            </div>
        </div>
        <div class="features">
            <div class="feature">
                <span class="icon">★</span>
                <h3>Resolución de alta definición</h3>
                <p>Las cámaras actuales ofrecen resoluciones de hasta 8K, lo que permite capturar imágenes extremadamente detalladas.</p>
            </div>
            <div class="feature">
                <span class="icon">🌙</span>
                <h3>Visión nocturna</h3>
                <p>Gracias a los sensores de imagen de alta sensibilidad y los LED infrarrojos, las cámaras pueden capturar imágenes claras en completa oscuridad.</p>
            </div>
            <div class="feature">
                <span class="icon">🔍</span>
                <h3>Zoom digital y óptico</h3>
                <p>Muchas cámaras permiten acercar y alejar la imagen de forma digital u óptica, lo que resulta útil para observar detalles a distancia.</p>
            </div>
            <div class="feature">
                <span class="icon">📹</span>
                <h3>Detección de movimiento</h3>
                <p>Las cámaras pueden activarse automáticamente al detectar movimiento en el área de vigilancia, enviando alertas al usuario o grabando un video.</p>
            </div>
        </div>
        <!-- Flechas de navegación -->
        <div class="navigation-arrows">
            <button class="arrow-left" onclick="navigateSection('prev')">&#9664;</button>
            <button class="arrow-right" onclick="navigateSection('next')">&#9654;</button>
        </div>
    </section>

    <!-- Pie de página -->
    <footer class="sticky-footer">
        <p>&copy; 2025 VerMax Company. All rights reserved.</p>
    </footer>

    <script>
        // Navegación entre secciones
        function navigateSection(direction) {
            const currentSection = document.querySelector('.current-section');
            let targetSection;

            if (direction === 'next') {
                targetSection = document.getElementById('second-section');
            } else {
                targetSection = document.getElementById('main-section');
            }

            currentSection.classList.remove('current-section');
            targetSection.classList.add('current-section');
            targetSection.scrollIntoView({ behavior: 'smooth' });
        }

        // Asignar clase inicial
        document.getElementById('main-section').classList.add('current-section');
    </script>
</body>
</html>
