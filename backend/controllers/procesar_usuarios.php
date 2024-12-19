<?php
    include('controller_usuario.php');

    $tipo = $_POST['tipo'];
    $usuario = $_POST['usuario'];
    $pass = $_POST['password'];
    $correo = $_POST['correo'];
    //validacion
    $datos_correctos = false;
    $dccorreo = false;
    session_start();


    if(isset($tipo) && !empty($tipo) && isset($usuario) && !empty($usuario) && isset($pass) && !empty($pass)){
        $datos_correctos = true;
    }

    if(!isset($correo) || empty($correo) || !preg_match("/^[a-zA-Z0-9._%+-]+@gmail\.com$/", $correo)){
        $dccorreo = false;
        $_SESSION['err_correo'] = true;
    }else{
        $dccorreo = true;
    }

    if($dccorreo == false){
        $datos_correctos = false;
    }else{
        $datos_correctos = true;
    }

    $usuarioDAO = new UsuarioDAO();
    $consulta = $usuarioDAO->buscarUsuarioUP($usuario,$pass);
    echo mysqli_num_rows($consulta);
    if(mysqli_num_rows($consulta)>=1){    
        $datos_correctos = false;
        $_SESSION['usuario_existe'] = true;
    }

    if($datos_correctos == true){
        $res = $usuarioDAO->agregarUsuario($tipo, $usuario, $pass,$correo);
        if($res == 1){
            header('location: ../pages/login');
        }
    }else{
        $_SESSION['error_validacion'] = true;
        $_SESSION['correo'] = $_POST['correo'];
        if(isset($_SESSION['usuario_existe'])){
            $_SESSION['usuario'] = $_POST['usuario'];
        }
        $_SESSION['tipo'] = $_POST['tipo'];
        header('Location: ../pages/formulario_registro');
    }

?>