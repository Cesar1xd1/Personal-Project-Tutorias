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
    
    <?php
        include_once('../controllers/controller_alumno.php');
        if(!isset($_POST['caja_tutor']) || empty($_POST['caja_tutor']) || !is_numeric($_POST['caja_tutor']) || !ctype_digit($_POST['caja_tutor'])){
        
        }else{
            $tutor = $_POST['caja_tutor'];
            $tutorDAO = new TutorDAO();
            $datos = $tutorDAO->mostrarTutoresFiltro("SELECT * FROM grupos WHERE NC_T = '$tutor';");
            $datosTutor = $TutorDAO->mostrarTutoresFiltro("SELECT * FROM tutores WHERE Num_Control = '$tutor';");
            $campos = mysqli_fetch_assoc($datosTutor);
            echo '<div class="container">';
            echo $campos['NumControl'];
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
</body>
</html>