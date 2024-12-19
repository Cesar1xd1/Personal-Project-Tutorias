<?php
    include('controller_alumno.php');

    $alumnoDAO = new AlumnoDAO();

    var_dump($_GET['nc']);

    if($alumnoDAO->eliminarAlumno($_GET['nc'])){
        header('location: ../pages/gestion_alumnos');
    }else{
        echo "No funciono";
    }
?>