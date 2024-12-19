
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
    include('controller_usuario.php');
    $correo = $_POST['correo_recuperar'];
    $usuarioDAO = new UsuarioDAO();
    $res = $usuarioDAO->buscarUsuarioCorreo($correo);
    if (mysqli_num_rows($res) == 1) {
        $datos =  mysqli_fetch_assoc($res);
        session_start();
        $codigo = rand(1000, 9999);
        $_SESSION['codigo'] = $codigo;
        $_SESSION['user'] = $datos['usuario'];
        echo "<script>console.log('" . $codigo."'-'".$datos['usuario'] ."'-'".$correo."');</script>";
        echo ('<script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
</script>
<script>
    (function () {
        emailjs.init("wmlGw7NaABw_Fejl_"); // Reemplaza con tu API key
    })();

        const templateParams = {
            codigo: "'.$codigo.'",
            correo: "'.$correo.'"
        };

        emailjs.send("service_crf1qsr", "template_k3mhx38", templateParams)
        .then(
            (response) => {
        console.log("Correo enviado con éxito", response.status, response.text);
        },
        (error) => {
            console.log("Error al enviar el correo", error);
        }
    );
</script>');
    } else {
        session_unset();
        session_destroy();
        header('Location: ../pages/correo_verificacion');
    }
    ?>
    <div class="container">
    <form action="validar_codigo.php" method="POST">
        <br>
        <br>
        <h2>Verificar Codigo</h2>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">introduce el codigo</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="codigo">
        </div>
        <button type="submit" class="btn btn-primary">Verificar</button>
    </form>
    </div>
</body>
</html>