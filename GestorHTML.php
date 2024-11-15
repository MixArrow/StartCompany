<?php include 'GestorPHP.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Notas Personales</title>
    <link rel="stylesheet" href="PHP.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Gestor de Notas</h1>
        <form action="GestorPHP.php" method="post" class="mb-4">
            <div class="form-group">
                <label for="titulo">Título de la Nota:</label>
                <input type="text" name="titulo" id="titulo" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="contenido">Contenido de la Nota:</label>
                <textarea name="contenido" id="contenido" class="form-control" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Agregar Nota</button>
        </form>



        <h2>Notas Guardadas</h2>
        <?php if (isset($result) && $result !== null && $result->num_rows > 0): ?>
            <ul class="list-group">
                <?php while ($row = $result->fetch_assoc()): ?>
                    <li class="list-group-item">
                        <h5><?php echo htmlspecialchars($row['titulo']); ?></h5>
                        <p><?php echo nl2br(htmlspecialchars($row['contenido'])); ?></p>
                        <small>Fecha: <?php echo $row['fecha']; ?></small>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php else: ?>
            <p>No hay notas guardadas.</p>
        <?php endif; ?>
    <!--Javascript Nota Agregada Existosamente--> 
   </div>
    <!--Contendedor del mensaje-->
    <script src = "Script.js"></script>
        <div id= "mensaje"; id = "formNota"; id ="titulo"; id="contenido"></div>
</body>
</html>