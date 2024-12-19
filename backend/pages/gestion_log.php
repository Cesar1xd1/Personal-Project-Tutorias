<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once('menu_principal_T.php');
    ?>
</body>
</html>

<?php
    include_once('../controllers/controller_tutor.php');

    $tutorDAO = new TutorDAO();
    $datos = $tutorDAO->mostrarLogEliminacion("x");

    echo '<div class="container"';

    if(mysqli_num_rows($datos)>0){
        echo'<div class="table-responsive" style="overflow-y: scroll; height: 425px;"><table class="table table-success table-striped" style="overflow-y: scroll;">';
        echo'<thead>
            <tr>
                <th> Id </th>
                <th> Mensaje </th>
                <th> Fecha </th>
            </tr>
            </thead> <tbody>';

        while($fila = mysqli_fetch_assoc($datos)){
            printf("<tr> <td>".$fila['id']."</td>
            <td>".$fila['mensaje']."</td>
            <td>".$fila['fecha']."</td>");
        }
        echo '</tbody></table></div>';
    }else{
        echo "<h1>Tabla Vacia </h1>";
    }
    echo "</div>";

?>