<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel= "stylesheet" type="text/css" href="index.css"/> 
</head>
<body>
    <center>
        <table border="2">
            <thead>
                <tr>
                <th colspan="5"><a href="index.php">Nuevo</a><th>
                </tr>
                <tr>
                    <th>id</th>
                    <th>nombre</th>
                    <th>imagen</th>
                    <th colspan="2">operaciones</th>
                </tr>
            </thead>
        
        <tbody>
        <?php
            include("conexion.php");
            $query = "SELECT * FROM tabla_imagen";
            $resultado = $conexion -> query ($query);
            while($row = $resultado -> fetch_assoc()){
        ?>
          <tr>
              <td><?php echo $row ['id']; ?></td>
              <td><?php echo $row ['nombre'];?></td>
              <td><img height= "70px" src= "data:image/jpg;base64, <?php echo base64_encode ($row['imagen']); ?>" /></td>
              <th><a href= "modificar.php?id=<?php echo $row['id'];?>"> modificar </a></th> 
              <th><a href= "eliiminar.php?id=<?php echo $row['id'];?>"> eliminar </a></th>
          </tr>
        <?php
        }
        ?>
        
         </tbody>
         </table>
     </center>
<body>
</html>