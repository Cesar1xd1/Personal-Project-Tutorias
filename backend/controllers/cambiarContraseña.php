<?php
    include('controller_usuario.php');
    $usuarioDAO = new UsuarioDAO();
    session_start();
    $usuario = $_SESSION['user'];
    $newPassword = $_POST['newpassword'];
    $usuarioDAO->cambiarContraseña($usuario,$newPassword);
        session_unset();
        session_destroy();
        header('Location: ../pages/login');

?>