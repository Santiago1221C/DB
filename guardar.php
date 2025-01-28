<?php
// Incluir el archivo de configuración
include 'config.php';

// Verificar si los datos se enviaron mediante POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST['nombre'];

    // Insertar el nombre en la base de datos
    $sql = "INSERT INTO nombres (nombre) VALUES ('$nombre')";

    if ($conn->query($sql) === TRUE) {
        echo "Nombre guardado exitosamente. <a href='index.php'>Volver</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
} else {
    echo "Método no permitido.";
}
?>
