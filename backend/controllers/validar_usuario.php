<?php

$usuario = $_POST['usuario'];
$password = $_POST['password'];
$tipo = $_POST['tipo'];

//codigo para el recapthca
session_start();
$ip = $_SERVER['REMOTE_ADDR'];
$captcha = $_POST['g-recaptcha-response'];
$secretkey = "6LcluZAqAAAAAMKuN83bGHIzgi32D3EEI90Is0xs";

$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$captcha&remoteip=$ip");

$atributos = json_decode($response, TRUE);
echo json_encode($atributos);
if($atributos['success']==false){
    $_SESSION['capchat'] = true;
    header('location: ../pages/login');
    exit;
    }
//Verificacion de User and Password en BD

require_once('../../database/conexion_bd.php');


$conexion = ConexionBD::getInstance()->getConexion();

if($conexion){
    //$sql = "SELECT * FROM usuarios WHERE Nombre_Usuario = '$usuario' AND Password = '$password';";
    $u_c = sha1($usuario);
    $p_c = sha1($password);

    $sql = "SELECT * FROM usuarios WHERE usuario = '$u_c' AND password = '$p_c' AND tipo = '$tipo';";
    $res = mysqli_query($conexion,$sql);
    if(mysqli_num_rows($res)==1){
        //echo "usuario encontrado";
        $_SESSION['valida']= true;
        $_SESSION['usuario'] = $usuario;
        $_SESSION['tipo_u'] = $tipo;
        if($tipo == "alumno"){
            header('location: ../pages/menu_principal_A');
        }else{
            header('location: ../pages/menu_principal_T');
        }
        
    }else{
        $_SESSION['valida']= false;
        header('location: ../pages/login');
    }
}else{
    echo "Error en la conexion";
}





?>