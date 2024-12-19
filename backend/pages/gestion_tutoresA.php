<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutores</title>

</head>
<body>
    <?php
        require_once('menu_principal_A.php');
    ?>
</body>
</html>

<?php
    include_once('../controllers/controller_tutor.php');

    $tutorDAO = new TutorDAO();
    $datos = $tutorDAO->mostrarTutores("x");

    echo '<div class="container">';

    if(mysqli_num_rows($datos)>0){
        
        echo'<div class="table-responsive" style="overflow-y: scroll; height: 425px;"><table class="table table-success table-striped" style="overflow-y: scroll;">';
        echo'<thead>
            <tr>
                <th> Num. Control </th>
                <th> Nombre </th>
                <th> Primer Ap </th>
                <th> Segundo Ap </th>
                <th> Semestre </th>
                <th> Carrera </th>
                <th > Acciones </th>
            </tr>
            </thead> <tbody>';

        while($fila = mysqli_fetch_assoc($datos)){
            printf("<tr> <td>".$fila['Num_Control']."</td>
            <td>".$fila['Nombre']."</td>
            <td>".$fila['Primer_Ap']."</td>
            <td>".$fila['Segundo_Ap']."</td>
            <td>".$fila['Semestre']."</td>
            <td>".$fila['Carrera']."</td>
            <td> 
            <a class='btn btn-primary' href='detallesTA?nc=%s&nombre=%s&primerAp=%s&segundoAp=%s&semestre=%d&carrera=%s&fecha=%s&tel=%s'> 
                <i class='bi bi-eye'></i>
            </a>",$fila['Num_Control'],$fila['Nombre'],$fila['Primer_Ap'],$fila['Segundo_Ap'],$fila['Semestre'],$fila['Carrera'],$fila['Fecha_Nacimiento'],$fila['Num_Telefono']);

        }
        echo '</tbody></table></div>';
    }else{
        echo"<h1>Tabla Vacia </h1>";
    }
    echo "</div>";


?>