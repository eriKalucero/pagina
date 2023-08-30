<?php
$conexion = mysqli_connect("localhost", "root", "", "imagen") or exit ("No se puede conectar con la base de datos");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_nombre = $_POST["id_nombre"];
    
    // Preparar y ejecutar la consulta para eliminar el registro por su ID
    $eliminar = "DELETE FROM formulario WHERE id_nombre = 3 ";
    if (mysqli_query($conexion, $eliminar)) {
        echo "Registro borrado exitosamente";
    } else {
        echo "Error al borrar el registro: " . mysqli_error($conexion);
    }
}
?>