<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once('menu_principal.php')
    ?>
    <div class="container">
    <form action="../controllers/procesar_cambiar_password.php" method="POST">
        <br>
        <br>
        <h2>Olvidaste tu contraseña</h2>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="correo_recuperar">
            <div id="emailHelp" class="form-text">Enviaremos un codigo de verificacion a este correo</div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    </div>
</body>

</html>