<?php
include("conexion.php");
$nombre = $_POST['nombre'];
$imagen= addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$query = "INSERT INTO tabla_imagen(id,nombre,imagen) VALUES( NULL ,'$nombre', '$imagen')";
$resultado = $conexion->query($query);
if($resultado){
    header("Location:mostrar.php");
}
else{
    echo "no se inserto";
}
?>