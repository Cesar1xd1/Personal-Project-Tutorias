<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once('menu_principal_A.php');
        include('../controllers/controller_tutor.php');
    ?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div style=" background-color: #1B396A !important;" class="card-header text-center text-white">
                        <h3>Detalles del Tutor</h3>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <strong>Numero de Control:</strong>
                                <?php
                                    echo $_GET["nc"];
                                ?>
                            </li>
                            <li class="list-group-item">
                                <strong>Nombre:</strong>
                                <?php
                                    echo $_GET["nombre"];
                                ?>
                            </li>
                            <li class="list-group-item">
                                <strong>Primer Apellido:</strong>
                                <?php
                                    echo $_GET["primerAp"];
                                ?>
                            </li>
                            <li class="list-group-item">
                                <strong>Segundo Apellido:</strong>
                                <?php
                                    echo $_GET["segundoAp"];
                                ?>
                            </li>
                            <li class="list-group-item">
                                <strong>Semestre a tutorar:</strong>
                                <?php
                                    echo $_GET["semestre"];
                                ?>
                            </li>
                            <li class="list-group-item">
                                <strong>Carrera a tutorar:</strong>
                                <?php
                                    echo $_GET["carrera"];
                                ?>
                            </li>
                            <li class="list-group-item">
                                <strong>Numero de Telefono:</strong>
                                <?php
                                    echo $_GET["tel"];
                                ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>