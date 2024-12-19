<?php
    include('controller_tutor.php');

    $tutorDAO = new TutorDAO();

    var_dump($_GET['nc']);

    if($tutorDAO->eliminarTutor($_GET['nc'])){
        header('location: ../pages/gestion_tutores');
    }else{
        echo "No funciono";
    }
?>