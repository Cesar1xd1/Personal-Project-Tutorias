<?php
include_once('../../database/conexion_bd.php');
    class AlumnoDAO{
        private $conexion;

        public function __CONSTRUCT(){
            $this->conexion = ConexionBD::getInstance()->getConexion();
        }

        // ---- metodos abcc ----

        //Altas
        public function agregarAlumno($nc,$nombre,$primerAp,$segundoAp,$semestre,$carrera,$fecha,$numTel){
                $sql = "INSERT INTO alumnos (Num_Control, Nombre, Primer_Ap, Segundo_Ap, Semestre, Carrera, Fecha_Nacimiento, Num_Telefono) 
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
        public function eliminarAlumno($nc){
            $sql = "DELETE FROM alumnos WHERE Num_Control = ?";
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
        public function editarAlumno($nc,$nombre,$pA,$sA,$semestre,$carrera,$fecha,$numTel){
            $sql = "UPDATE alumnos SET Nombre = ?, Primer_Ap = ?, Segundo_Ap = ?, Semestre = ?, Carrera = ?, Fecha_Nacimiento = ?, Num_Telefono = ? WHERE Num_Control = ?";
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
        public function mostrarAlumnos($filtro){
            $sql = "SELECT * FROM alumnos;";
            $res = mysqli_query($this->conexion, $sql);
            return $res;
        }

        public function mostrarAlumnosFiltro($filtro){
            $res = mysqli_query($this->conexion, $filtro);
            return $res;
        }

        //Funcion para la edad
        public function funcionEdad($nc){
            $sql = "SELECT CalcularEdad(fecha_nacimiento) AS edad FROM alumnos WHERE Num_Control = '$nc'";
            $res = mysqli_query($this->conexion, $sql);
            return $res;
        }


    }
?>