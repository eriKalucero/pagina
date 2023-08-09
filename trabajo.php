<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>
    <link rel="stylesheet" type="text/css" href= "stylees.css" />
</head>

<body id="page-top">


<form  action="datos.php" method="POST">
<div id="login" >
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                    
                            <br>
                            <br>
                            <h3 class="text-center">Registro de nuevo usuario</h3>
                            <div class="form-group">
                            <label for="Usuario" class="form-label">Usuario</label>
                            <input type="text"  id="usuario" name="usuario" class="form-control" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="contraseña">Contraseña:</label><br>
                                <input type="contraseña" name="contraseña" id="contraseña" class="form-control" required>
                            </div>
                      
                        
                           <br>

                                <div class="mb-3">
                                    
                               <input type="submit" value="Guardar"class="btn btn-success" 
                               name="registrar">
                               
                               
                            </div>
                            </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</body>
</html>