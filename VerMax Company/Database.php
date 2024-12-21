<?php
include 'VerMax_connect.php'; // Conectar a la base de datos

// Inicializar variables de error
$error = "";

// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $user_name = $_POST['user_name'];

    // Consulta SQL para verificar credenciales
    $sql = "SELECT * FROM users WHERE user_id = '$user_id' AND user_name = '$user_name'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Credenciales correctas
        header("Location: dashboard.php"); // Redirigir a un panel de control o página principal
        exit();
    } else {
        // Credenciales incorrectas
        $error = "ID o Nombre incorrecto. Intente nuevamente.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Start Company - Login</title>
  <style>
    body {
      display: flex;
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      height: 100vh;
    }
    .left-panel {
      flex: 1;
      background-color: #f4f4f4;
      padding: 20px;
    }
    .form-group {
      margin: 20px 0;
    }
    .form-group input {
      width: calc(100% - 20px);
      padding: 10px;
      margin: 5px 0;
      display: block;
    }
    .form-group a {
      color: #007BFF;
      text-decoration: none;
      margin-right: 10px;
    }
    .error {
      color: red;
    }
  </style>
</head>
<body>
  <div class="left-panel">
    <h1>Sign in</h1>
    <?php if ($error): ?>
      <p class="error"><?= $error; ?></p>
    <?php endif; ?>
    <form method="POST" action="">
      <div class="form-group">
        <label>Credencial</label>
        <input type="text" name="user_id" placeholder="ID" required>
        <input type="text" name="user_name" placeholder="Nombre" required>
      </div>
      
