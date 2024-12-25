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
    <section class="hero">
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

    <!-- Modal para inicio de sesión de empleados -->
    <div id="employee-modal" class="modal" style="display: none;">
        <!-- Ventana modal para empleados -->
        <div class="modal-content">
            <span class="close" onclick="closeModal('employee')">&times;</span>
            <h2>Employee Login</h2>
            <form action="employeeLogin.php" method="POST">
                <label for="employee-name">Employee Name:</label>
                <input type="text" id="employee-name" name="employee_name" required>

                <label for="employee-id">Employee ID:</label>
                <input type="text" id="employee-id" name="employee_id" required>

                <label for="employee-password">Password:</label>
                <input type="password" id="employee-password" name="password" required>

                <button type="submit">Login</button>
            </form>
        </div>
    </div>

    <!-- Modal para inicio de sesión de clientes -->
    <div id="client-modal" class="modal" style="display: none;">
        <!-- Ventana modal para clientes -->
        <div class="modal-content">
            <span class="close" onclick="closeModal('client')">&times;</span>
            <h2>Client Login</h2>
            <form action="clientLogin.php" method="POST">
                <label for="service-number">Service Number:</label>
                <input type="text" id="service-number" name="service_number" required>

                <label for="invoice-id">Invoice ID:</label>
                <input type="text" id="invoice-id" name="invoice_id" required>

                <button type="submit">Login</button>
            </form>
        </div>
    </div>

    <!-- Pie de página -->
    <footer>
        <p>&copy; 2025 VerMax Company. All rights reserved.</p>
    </footer>

    <script>
        // Funciones para abrir y cerrar las ventanas modales
        function openModal(type) {
            document.getElementById(`${type}-modal`).style.display = 'block';
        }

        function closeModal(type) {
            document.getElementById(`${type}-modal`).style.display = 'none';
        }
    </script>
</body>
</html>
