<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    require('../pages/menu_principal.php');
    $codigoCliente = $_POST['codigo'];
    session_start();
    $codigoCorreo = $_SESSION['codigo'];
    if($codigoCliente == $codigoCorreo){
        echo ('<div class="container">
                <h2>Reestablecer Contraseña</h2>
                <form action="cambiarContraseña.php" method="POST">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Establece nueva contraseña</label>
                    <input type="password" class="form-control" id="exampleFormControlInput1" name="newpassword" placeholder="nuev contraseña">
                    <button type="submit" class="btn btn-success">Cambiar</button>
                </div>
                </form>
            </div>    
        ');
    }else{
        session_unset();
        session_destroy();
        header('Location: ../pages/login');
    }
?>
</body>
</html>
