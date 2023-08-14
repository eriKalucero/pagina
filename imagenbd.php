<?php
$imagen = "imagen";
$texto = "texto";

$conexion = mysqli_connect ("localhost", "root","", "eriiguada") or exit ("no se puede conectar");

$consulta= mysqli_query($conexion,"SELECT `imagen`, `nombre`,texto FROM `imgtabla` ");
while ($lista_consulta= mysqli_fetch_assoc($consulta) ){
    ?>
   <div class="consultas , image-container">
           <img class="imagen" src="<?php echo $lista_consulta["imagen"]; ?>">
           <p><?php echo $lista_consulta["texto"];?></p>
       
   </div>
   <?php
    }
    ?>