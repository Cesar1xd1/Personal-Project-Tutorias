<?php
    include('../../database/conexion_bd.php');

    class UsuarioDAO{
        private $conexion;

        public function __CONSTRUCT(){
            $this->conexion = ConexionBD::getInstance()->getConexion();
        }

        public function agregarUsuario($tipo, $usu, $pass,$correo){
            $sql = "INSERT INTO usuarios VALUES(?, sha1(?), sha1(?), ?);";
            $stmt = $this->conexion->prepare($sql);
            if ($stmt === false) {
                die('Error al preparar la consulta: ' . $this->conexion->error);
            }
            $stmt->bind_param('ssss',$tipo,$usu,$pass,$correo);
            $res = $stmt->execute();
            $stmt->close();
            return $res;
        }

        public function buscarUsuarioCorreo($correo){
            $sql = "SELECT * FROM usuarios WHERE correo = ?;";
            $stmt = $this->conexion->prepare($sql);
            if ($stmt === false) {
                die('Error al preparar la consulta: ' . $this->conexion->error);
            }
            $stmt->bind_param('s',$correo);
            $res = $stmt->execute();
            $stmt->close();
            return $res;
        }

        public function buscarUsuarioU($user){
            $sql = "SELECT * FROM usuarios WHERE usuario = sha1(?);";
            $stmt = $this->conexion->prepare($sql);
            if ($stmt === false) {
                die('Error al preparar la consulta: ' . $this->conexion->error);
            }
            $stmt->bind_param('s',$user);
            $res = $stmt->execute();
            $stmt->close();
            return $res;
        }

        public function cambiarContraseña($user,$pass){
            $sql = "UPDATE usuarios SET password = sha1(?) WHERE usuario = ?;";
            $stmt = $this->conexion->prepare($sql);
            if ($stmt === false) {
                die('Error al preparar la consulta: ' . $this->conexion->error);
            }
            $stmt->bind_param('ss',$user,$pass);
            $res = $stmt->execute();
            $stmt->close();
            return $res;
        }

        public function buscarUsuarioUP($user,$pass){
            $sql = "SELECT * FROM usuarios WHERE usuario = sha1(?) AND password = sha1(?);";
            $stmt = $this->conexion->prepare($sql);
            if ($stmt === false) {
                die('Error al preparar la consulta: ' . $this->conexion->error);
            }
            $stmt->bind_param('ss',$user,$pass);
            $res = $stmt->execute();
            $stmt->close();
            return $res;
        }
        
    }

?>