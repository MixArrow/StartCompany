<?php
// Archivo: index.php - Gestor de Notas Personales con PHP y MySQL

require_once __DIR__ . '/vendor/autoload.php';

// Conexión a la base de datos MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "notas_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} else { "Conexion Existosa";}

// Crear la tabla de notas si no existe
$sql = "CREATE TABLE IF NOT EXISTS notas (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(50) NOT NULL,
    contenido TEXT NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === false) {
    echo "Error creando la tabla: " . $conn->error;
}

// Procesar el formulario de agregar nota
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['titulo']) && isset($_POST['contenido'])) {
    $titulo = $conn->real_escape_string($_POST['titulo']);
    $contenido = $conn->real_escape_string($_POST['contenido']);

    $sql = "INSERT INTO notas (titulo, contenido) VALUES ('$titulo', '$contenido')";

    if ($conn->query($sql) === TRUE) {
        echo "<p>Nota agregada exitosamente.</p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Obtener todas las notas de la base de datos
$sql = "SELECT * FROM notas ORDER BY fecha DESC";
$result = $conn->query($sql);
?>

<?php
// Cerrar la conexión a la base de datos
$conn->close();
?>