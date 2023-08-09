<?php
$conexion = mysqli_connect("localhost", "root","","eriiguada")or exit ("no se puede conectar");

if(isset($_POST['registrar'])){

    if(strlen($_POST['usuario']) >=1 && strlen($_POST['contraseña'])  >=1 ){

    $usuario= trim($_POST['usuario']);
    $contraseña = trim($_POST['contraseña']);

    $consulta= "INSERT INTO trabajobd (usuario, contraseña)
    VALUES ('$usuario','$contraseña' )";

    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);

    header('Location: paginainicio.php');
  }
}

?>