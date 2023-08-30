<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel= "stylesheet" type="text/css" href="index.css"/> 
</head>
<body>
    <center><br/><br/><br/>
        <form action="proceso_guardar.php" method="POST" enctype="multipart/form-data">
            <input type="text" required name"nombre" placeholder="nombre" value=""/><br/><br/>
            <input type="file" required name="imagen" /><br/><br/>
            <input type="submit" value="aceptar">

            
        </form>
    </center>
</body>
</html>