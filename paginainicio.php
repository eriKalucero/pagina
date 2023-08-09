<!DOCTYPE html>
<html>
<head>
    <title>Página admin</title>
    
</head>
<body>
    <?php
    session_start();

    // Verificar si el usuario ha iniciado sesión
    if (isset($_SESSION['usuario'])) {
        // Si ha iniciado sesión, mostrar mensaje de bienvenida
        echo "<h2>Bienvenido, " . $_SESSION['usuario'] . "!</h2>";
        echo "<p>Esta es tu página de inicio.</p>";
        
    } else {
        // Si no ha iniciado sesión, redirigir al formulario de inicio de sesión
        header("Location: datos.php");
        exit();
    }
    
    ?>
</body>
</html>
