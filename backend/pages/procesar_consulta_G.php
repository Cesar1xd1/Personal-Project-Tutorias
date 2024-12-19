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
        require_once('consultas_grupos.php');
    ?>
</body>
</html>

<?php
    $tutor = $_POST['caja_tutor'];
    include_once('../controllers/controller_tutor.php');
    if(!isset($tutor) || empty($tutor) || !is_numeric($tutor) || !ctype_digit($tutor)){
    
    }else{
        $tutor = $_POST['caja_tutor'];
            $tutorDAO = new TutorDAO();
            $datos = $tutorDAO->mostrarTutoresFiltro("SELECT * FROM grupos WHERE NC_T = '$tutor';");
            $datosTutor = $tutorDAO->mostrarTutoresFiltro("SELECT * FROM tutores WHERE Num_Control = '$tutor';");
            $campos = mysqli_fetch_assoc($datosTutor);
            echo '<div class="container">';
            echo "<h3>Tutor: ".$campos['Nombre']." ".$campos['Primer_Ap']." ".$campos['Segundo_Ap']." | Grupo: ".$campos['Semestre']." ".$campos['Carrera']."</h3>";
            
        if(mysqli_num_rows($datos)>0){
            echo'<div class="table-responsive" style="overflow-y: scroll; height: 425px;"><table class="table table-success table-striped" style="overflow-y: scroll;">';
            echo'<thead>
        <tr>
            <th> Num. Control </th>
            <th> Nombre </th>
            <th> Primer Ap </th>
            <th> Segundo Ap </th>
        </tr>
        </thead> <tbody>';
        while($fila = mysqli_fetch_assoc($datos)){
            echo("<tr> <td>".$fila['NC_A']."</td>
        <td>".$fila['N_A']."</td>
        <td>".$fila['PA_A']."</td>
        <td>".$fila['SA_A']."</td>"
        );
        }
        }

    }

    

?>