<?php

    include('controller_alumno.php');
    //Obtener informacion de las cajas
    $num_control = $_POST['caja_nc'];
    $nombre = $_POST['caja_nombre'];
    $primerAp = $_POST['caja_primerAp'];
    $segundoAp = $_POST['caja_segundoAp'];
    $semestre = $_POST['caja_semestre'];
    $carrera = $_POST['caja_carrera'];
    $fecha = $_POST['caja_fecha'];
    $tel = $_POST['caja_tel'];


    


    //validar
    $datos_correctos = false;
    $dcnc = false;
    $dcnombre = false;
    $dcpAp = false;
    $dcsAp = false;
    $dcsemestre = false;
    $dccarrera = false;
    $dcfecha = false;
    $dctel = false;
    session_start();

    
    if(!isset($num_control) || empty($num_control) || !is_numeric($num_control) || !ctype_digit($num_control)){
        $dcnc = false;
        $_SESSION['err_nc'] = [empty($num_control),is_numeric($num_control)];     
    }else{
        $dcnc = true;
    } 
    if(!isset($nombre) || empty($nombre) || !preg_match("/^[a-zA-Z\s]+$/", $nombre)){
        $dcnombre = false;
        $_SESSION['err_nombre'] = true;
    }else{
        $dcnombre = true;
    }
    if(!isset($primerAp) || empty($primerAp) || !preg_match("/^[a-zA-Z\s]+$/", $primerAp)){
        $dcpAp = false;
        $_SESSION['err_pAp'] = true;
    }else{
        $dcpAp = true;
    } 
    if(!isset($segundoAp) || empty($segundoAp) || !preg_match("/^[a-zA-Z\s]+$/", $segundoAp)){
        $dcsAp= false;
        $_SESSION['err_sAp'] = true;
    }else{
        $dcsAp = true;
    } 
    if(!isset($fecha) || empty($fecha) || !preg_match("/^\d{4}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01])$/", $fecha) ){
        $dcfecha= false;
        $_SESSION['err_fecha'] = true;
    }else{
        $dcfecha = true;
    } 
    if(!isset($semestre) || empty($semestre) || !is_numeric($semestre) || !ctype_digit($semestre)){
        $dcsemestre = false;
        $_SESSION['err_semestre'] = true;
    }else{
        $dcsemestre = true;
    } 
    if(!isset($carrera) || empty($carrera) || !preg_match("/^[a-zA-Z\s]+$/", $carrera)){
        $dccarrera = false;
        $_SESSION['err_carrera'] = true;
    }else{
        $dccarrera = true;
    }
    if(!isset($tel) || empty($tel) || !is_numeric($tel) || !ctype_digit($tel)){
        $dctel = false;
        $_SESSION['err_tel'] = true;     
    }else{
        $dctel = true;
    } 

    if($dcnc==false || $dcnombre==false || $dcpAp==false || $dcsAp==false || $dcfecha=false ||$dcsemestre==false ||$dccarrera==false || $dctel==false){
        $datos_correctos = false;
    }else{
        $datos_correctos = true;
    }

    //Mandarselos al controlador
    
    if($datos_correctos==true){
        $alumnoDAO = new AlumnoDAO();
        $res = $alumnoDAO->editarAlumno($num_control,$nombre,$primerAp,$segundoAp,$semestre,$carrera,$fecha,$tel);
        
        
        if($res==1){
            $_SESSION['edicion_correcta'] = true;
            header('Location: ../pages/gestion_alumnos');
        }else{
            $_SESSION['edicion_correcta'] = false;
            header('Location: ../pages/gestion_alumnos');
        }
        }else{
            $_SESSION['error_validacion'] = true;
            $_SESSION['nc'] = $_POST['caja_nc'];
            $_SESSION['nombre'] = $_POST['caja_nombre'];
            $_SESSION['carrera'] = $_POST['caja_carrera'];
            $_SESSION['pAp'] = $_POST['caja_primerAp'];
            $_SESSION['sAp'] = $_POST['caja_segundoAp'];
            $_SESSION['semestre'] = $_POST['caja_semestre'];
            $_SESSION['fecha'] = $_POST['caja_fecha'];
            $_SESSION['tel'] = $_POST['caja_tel'];
            header('Location: ../pages/formulario_cambios_alumnos');
    }
?>