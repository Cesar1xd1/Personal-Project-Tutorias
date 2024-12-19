
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once('menu_principal.php');
    session_start();
    ?>
    <form action="../controllers/procesar_usuarios.php" method="POST">
        <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="card" style="width: 100%; max-width: 400px;">
                <div class="card-body">
                    <h5 class="card-title text-center">Registrar Usuario</h5>
                    <form>
                        <!-- Campo de Nombre de Usuario -->
                        <div class="mb-3">
                            <label class="form-label">Tipo</label>
                            <select name="tipo" class="form-select" aria-label="Default select example">
                                <option value="alumno" <?= (isset($_SESSION['tipo']) && $_SESSION['tipo'] === "alumno" )? 'selected' : '' ?>>Alumno</option>
                                <option value="tutor" <?= (isset($_SESSION['tipo']) && $_SESSION['tipo'] === "tutor" )? 'selected' : '' ?>  >Tutor</option>
                                <option value="jefe" <?= (isset($_SESSION['tipo']) &&$_SESSION['tipo'] === "jefe" )? 'selected' : '' ?> >Jefe de Division</option>
                                <option value="psicologo" <?= (isset($_SESSION['tipo']) && $_SESSION['tipo'] === "psicologo" )? 'selected' : '' ?> >Prsicologo</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="username" class="form-label">Usuario</label>
                            <input type="text" name="usuario" class="form-control" id="usuario" placeholder="Usuario"
                                required value="<?php
                                if(isset($_SESSION['usuario'])){
                                    echo $_SESSION['usuario'];
                                } ?>" >
                                <div style="color:red;">
                                    <?php
                                        if(isset($_SESSION['usuario_existe'])){
                                            echo "Exte usuario ya existe";
                                        } ?>

                                </div>
                        </div>

                        <div class="mb-3">
                            <label for="username" class="form-label">Correo</label>
                            <input type="email" name="correo" class="form-control" id="correo" placeholder="Correo"
                                required value="<?php
                                if(isset($_SESSION['correo'])){
                                    echo $_SESSION['correo'];
                                } ?>" >
                                <div style="color:red;">
                                    <?php
                                        if(isset($_SESSION['err_correo'])){
                                            echo "Unicamente @gmail.com";
                                        } ?>

                                </div>
                        </div>

                        <!-- Campo de Contraseña -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input name="password" type="password" class="form-control" id="password"
                                placeholder="Contraseña" required>
                        </div>

                        <!-- Botón de Iniciar Sesión -->
                        <button type="submit" class="btn btn-primary w-100">Registrar</button>
                    </form>
                </div>
            </div>
        </div>
    </form>
</body>

</html>

<?php
    unset($_SESSION['error_validacion']);

    unset($_SESSION['correo']);
    unset($_SESSION['tipo']);
    unset($_SESSION['usuario']);
    unset($_SESSION['err_correo']);
    unset($_SESSION['usuario_existe']);

?>