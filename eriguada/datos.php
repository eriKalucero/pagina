<?php
session_start();

// Aquí debes realizar la validación de los datos ingresados por el usuario.
// Por ejemplo, puedes verificar si el nombre de usuario y la contraseña
// coinciden con los registros almacenados en la base de datos.

// Si las credenciales son válidas, inicia la sesión y redirige al usuario
// a la página de inicio.

$usuario =  $_POST['usuario'];
$contraseña = $_POST['contraseña'];


$conexion = mysqli_connect("localhost", "root","","eriiguada")or exit ("no se puede conectar");

$siEstaUsuario = "SELECT * FROM `trabajobd` WHERE usuario = '$usuario' AND contraseña = '$contraseña' ";

echo $siEstaUsuario;

$valor =  mysqli_query($conexion,$siEstaUsuario)or exit ("no guarda");

$count = $valor->num_rows; 

if ($count > 0)
{
    $_SESSION['usuario'] = $usuario;
    header("Location: mostrar.php");
    exit();

}
else {
    // Credenciales incorrectas, mostrar mensaje de error
    header("location:trabajo.php");
}

