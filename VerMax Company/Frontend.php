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
    <header>
        <div class="navbar">
            <div class="logo">
                VER<span>MAX</span>
            </div>
            <nav class="menu">
                <ul>
                    <li><a href="#history">History</a></li>
                    <li><a href="#cameras">Cameras</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#" onclick="openModal('employee')">Sign In</a></li>
                    <li><a href="#" onclick="openModal('client')">Clients</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="background-image">
            <img src="image.png" alt="Hero Background">
        </div>
        <div class="overlay"></div>
        <div class="camera-image">
            <img src="hikvision-central.png" alt="Central Camera">
        </div>
        <h1>Welcome to VerMax</h1>
    </section>

    <!-- Modal para inicio de sesión de empleados -->
    <div id="employee-modal" class="modal" style="display: none;">
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

    <footer>
        <p>&copy; 2024 VerMax Company. All rights reserved.</p>
    </footer>

    <script>
        function openModal(type) {
            document.getElementById(`${type}-modal`).style.display = 'block';
        }

        function closeModal(type) {
            document.getElementById(`${type}-modal`).style.display = 'none';
        }
    </script>
</body>
</html>
