<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>

<script src="../scripts/validacionCajas.js">
</script>

<body>
    <?php
    require_once('menu_principal_T.php');
    ?>
    <div class="container">
        <h2>Agregar Alumno</h1>
            <div style="display:<?php echo (isset($_SESSION['insercion_correcta']) && $_SESSION['insercion_correcta'] == true) ? 'content' : 'none'; ?>;" class="alert alert-success alert-dismissible fade show" role="alert">
                Registro agregado correctamente
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div style="display:<?php echo (isset($_SESSION['insercion_correcta']) && $_SESSION['insercion_correcta'] == false) ? 'content' : 'none'; ?>;" class="alert alert-danger alert-dismissible fade show" role="alert">
                Registro NO correctamente Num. Control Repetido
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../controllers/procesar_altas_alumnos.php" method="POST">
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label for="inputEmail4">Numero de Control</label>
                        <input type="text" class="form-control" id="caja_nc" name="caja_nc" placeholder="Numero de Control" maxlength="8" minlength="8" onkeypress=" return validacionNumeros(event);"
                            value="<?php
                                    if (isset($_SESSION['nc'])) {
                                        echo $_SESSION['nc'];
                                    } ?>">
                        <div style="color:red;">
                            <?php if (isset($_SESSION['err_nc'])) {
                                echo "Solo numeros";
                            } ?>
                        </div>
                    </div>
                    <div class="form-group col-md-5">
                        <label for="inputPassword4">Nombre</label>
                        <input type="text" class="form-control" id="caja_nombre" name="caja_nombre" placeholder="Nombre"
                            onkeypress=" return validacionLetras(event);"
                            value="<?php
                                    if (isset($_SESSION['nombre'])) {
                                        echo $_SESSION['nombre'];
                                    } ?>">
                        <div style="color:red;">
                            <?php if (isset($_SESSION['err_nombre'])) {
                                echo "Solo letras";
                            } ?>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label for="inputAddress">Primer Apellido</label>
                        <input type="text" class="form-control" id="caja_primerAp" name="caja_primerAp" placeholder="Apellido Paterno"
                            onkeypress=" return validacionLetras(event);" value="<?php
                                                                                    if (isset($_SESSION['pAp'])) {
                                                                                        echo $_SESSION['pAp'];
                                                                                    } ?>">
                        <div style="color:red;">
                            <?php if (isset($_SESSION['err_pAp'])) {
                                echo "Solo letras";
                            } ?>
                        </div>
                    </div>
                    <div class="form-group col-md-5">
                        <label for="inputAddress2">Segundo Apellido</label>
                        <input type="text" class="form-control" id="caja_segundoAp" name="caja_segundoAp" placeholder="Apellido Materno"
                            onkeypress=" return validacionLetras(event);" value="<?php
                                                                                    if (isset($_SESSION['sAp'])) {
                                                                                        echo $_SESSION['sAp'];
                                                                                    } ?>">
                        <div style="color:red;">
                            <?php if (isset($_SESSION['err_sAp'])) {
                                echo "Solo letras";
                            } ?>
                        </div>
                    </div>
                </div>

                <div class="form-row">

                    <div class="form-group col-md-4">
                        <label for="inputState">Semestre</label>
                        <select name="caja_semestre" class="form-control" aria-label="Default select example">
                            <option value="1" <?= (isset($_SESSION['semestre']) && $_SESSION['semestre'] === "1") ? 'selected' : '' ?>>1</option>

                            <option value="2" <?= (isset($_SESSION['semestre']) && $_SESSION['semestre'] === "2") ? 'selected' : '' ?>>2</option>

                            <option value="3" <?= (isset($_SESSION['semestre']) && $_SESSION['semestre'] === "3") ? 'selected' : '' ?>>3</option>

                            <option value="4" <?= (isset($_SESSION['semestre']) && $_SESSION['semestre'] === "4") ? 'selected' : '' ?>>4</option>

                            <option value="4" <?= (isset($_SESSION['semestre']) && $_SESSION['semestre'] === "4") ? 'selected' : '' ?>>4</option>

                            <option value="5" <?= (isset($_SESSION['semestre']) && $_SESSION['semestre'] === "5") ? 'selected' : '' ?>>5</option>

                            <option value="6" <?= (isset($_SESSION['semestre']) && $_SESSION['semestre'] === "6") ? 'selected' : '' ?>>6</option>

                            <option value="7" <?= (isset($_SESSION['semestre']) && $_SESSION['semestre'] === "7") ? 'selected' : '' ?>>7</option>

                            <option value="8" <?= (isset($_SESSION['semestre']) && $_SESSION['semestre'] === "8") ? 'selected' : '' ?>>8</option>

                            <option value="9" <?= (isset($_SESSION['semestre']) && $_SESSION['semestre'] === "9") ? 'selected' : '' ?>>9</option>

                            <option value="10" <?= (isset($_SESSION['semestre']) && $_SESSION['semestre'] === "10") ? 'selected' : '' ?>>10</option>

                            <option value="11" <?= (isset($_SESSION['semestre']) && $_SESSION['semestre'] === "11") ? 'selected' : '' ?>>11</option>

                            <option value="12" <?= (isset($_SESSION['semestre']) && $_SESSION['semestre'] === "12") ? 'selected' : '' ?>>12</option>


                        </select>
                        <div style="color:red;">
                            <?php if (isset($_SESSION['err_semestre'])) {
                                echo "Solo numeros enteros";
                            } ?>
                        </div>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="inputZip">Carrera</label>
                        <select name="caja_carrera" class="form-control" aria-label="Default select example">
                            <option value="LA" <?= (isset($_SESSION['carrera']) && $_SESSION['carrera'] === "LA") ? 'selected' : '' ?>>LA</option>
                            <option value="CP" <?= (isset($_SESSION['carrera']) && $_SESSION['carrera'] === "CP") ? 'selected' : '' ?>>CP</option>
                            <option value="ISC" <?= (isset($_SESSION['carrera']) && $_SESSION['carrera'] === "ISC") ? 'selected' : '' ?>>ISC</option>
                            <option value="IM" <?= (isset($_SESSION['carrera']) && $_SESSION['carrera'] === "IM") ? 'selected' : '' ?>>IM</option>
                            <option value="IIA" <?= (isset($_SESSION['carrera']) && $_SESSION['carrera'] === "IIA") ? 'selected' : '' ?>>IIA</option>
                        </select>
                        <div style="color:red;">
                            <?php if (isset($_SESSION['err_carrera'])) {
                                echo "Solo letras";
                            } ?>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <label for="inputZip">Fecha de Nacimiento</label>
                    <div class="form-group col-mid-6">
                        <input class="form-control" type="date" name="caja_fecha" id="" value="<?php
                                                                                                if (isset($_SESSION['fecha'])) {
                                                                                                    echo $_SESSION['fecha'];
                                                                                                } ?>">
                        <div style="color:red;">
                            <?php if (isset($_SESSION['err_fecha'])) {
                                echo "fecha vacia";
                            } ?>
                        </div>
                    </div>


                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Numero de Telefono</label>
                        <input type="tel" class="form-control" id="caja_tel" name="caja_tel" placeholder="# de Telefono" minlength="10" maxlength="10" onkeypress=" return validacionNumeros(event);"
                            value="<?php
                                    if (isset($_SESSION['tel'])) {
                                        echo $_SESSION['tel'];
                                    } ?>">
                        <div style="color:red;">
                            <?php if (isset($_SESSION['err_tel'])) {
                                echo "Solo numeros";
                            } ?>
                        </div>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary">Dar de Alta</button>
    </div>


    </form>
    </div>

</body>

</html>

<?php
unset($_SESSION['insercion_correcta']);
unset($_SESSION['error_validacion']);

unset($_SESSION['nc']);
unset($_SESSION['nombre']);
unset($_SESSION['pAp']);
unset($_SESSION['sAp']);
unset($_SESSION['fecha']);
unset($_SESSION['semestre']);
unset($_SESSION['carrera']);
unset($_SESSION['tel']);

unset($_SESSION['err_nc']);
unset($_SESSION['err_nombre']);
unset($_SESSION['err_pAp']);
unset($_SESSION['err_sAp']);
unset($_SESSION['err_fecha']);
unset($_SESSION['err_semestre']);
unset($_SESSION['err_carrera']);
unset($_SESSION['err_tel']);


?>