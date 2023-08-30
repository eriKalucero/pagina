<?php
    include("conexion.php");
    $id = $_REQUEST['id'];
    
    echo "id", $id;
    $query = "DELETE FROM tabla_imagen WHERE id='$id'";
    $resultado= $conexion->query($query);
    echo "fdkljglk";
    if ($resultado){
        echo "fdkljglk";
        header ("location:mostrar.php");
    }
    else{
        echo "no se inserto";
    }


?>