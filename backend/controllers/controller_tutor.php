<?php
include_once('../../database/conexion_bd.php');
    class TutorDAO{
        private $conexion;

        public function __CONSTRUCT(){
            $this->conexion = ConexionBD::getInstance()->getConexion();
        }

        // ---- metodos abcc ----

        //Altas
        public function agregarTutor($nc,$nombre,$primerAp,$segundoAp,$semestre,$carrera,$fecha,$numTel){
            $sql = "INSERT INTO tutores (Num_Control, Nombre, Primer_Ap, Segundo_Ap, Semestre, Carrera, Fecha_Nacimiento, Num_Telefono) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = $this->conexion->prepare($sql);
                if ($stmt === false) {
                    die('Error al preparar la consulta: ' . $this->conexion->error);
                }
                $stmt->bind_param('ssssssss', $nc, $nombre, $primerAp, $segundoAp, $semestre, $carrera, $fecha, $numTel);
                $res = $stmt->execute();
                $stmt->close();
                return $res;
        }

        //Bajas
        public function eliminarTutor($nc){
            $sql = "DELETE FROM tutores WHERE Num_Control = ?";
            $stmt = $this->conexion->prepare($sql);
            if ($stmt === false) {
                die('Error al preparar la consulta: ' . $this->conexion->error);
            }
            $stmt->bind_param('s',$nc);
            $res = $stmt->execute();
            $stmt->close();
            return $res;
        }

        //Cambios
        public function editarTutor($nc,$nombre,$pA,$sA,$semestre,$carrera,$fecha,$numTel){
            $sql = "UPDATE tutores SET Nombre = ?, Primer_Ap = ?, Segundo_Ap = ?, Semestre = ?, Carrera = ?, Fecha_Nacimiento = ?, Num_Telefono = ? WHERE Num_Control = ?";
            $stmt = $this->conexion->prepare($sql);
                if ($stmt === false) {
                    die('Error al preparar la consulta: ' . $this->conexion->error);
                }
            $stmt->bind_param('ssssssss', $nombre, $pA, $sA, $semestre, $carrera, $fecha, $numTel,$nc);
            $res = $stmt->execute();
            $stmt->close();
            return $res;
        }

        //Consultas
        public function mostrarTutores($filtro){
            $sql = "SELECT * FROM tutores;";
            $res = mysqli_query($this->conexion, $sql);
            return $res;
        }

        public function mostrarTutoresFiltro($filtro){
            $res = mysqli_query($this->conexion, $filtro);
            return $res;
        }

        public function mostrarLogEliminacion($filtro){
            $sql = "SELECT * FROM log_eliminacion;";
            $res = mysqli_query($this->conexion, $sql);
            return $res;
        }

        //Funcion para la edad
        public function funcionEdad($nc){
            $sql = "SELECT CalcularEdad(fecha_nacimiento) AS edad FROM tutores s WHERE Num_Control = '$nc'";
            $res = mysqli_query($this->conexion, $sql);
            return $res;
        }
    }
?>