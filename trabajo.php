<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
</head>
 
<body>

	<section class="login">
	<form action = "datos.php" method="POST">
        <div>
            <label> usuario</label>
            <input type="text" maxlength="30" name= "usuario" placeholder="usuario" required>
        </div>
          
        <div>
            <label >contraseña</label>
            <input type="text" maxlength="30"  name= "contraseña" placeholder="contraseña" required>
        </div>
        <div>
            <button type="submit"  data-bs-toggle="modal" data-bs-target="#staticBackdrop" >Enviar</button>
        </div>


    </form>
	</section>

