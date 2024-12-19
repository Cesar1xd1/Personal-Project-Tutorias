<?php
class ConexionBD {
    private static $instance = null; // Instancia única de la clase
    private $conexion;
    private $host = "localhost:3306";
    private $usuario = "admin";
    private $password = "admin";
    private $bd = "bd_tutorias";

    // Constructor privado para evitar instanciación directa
    private function __construct() {
        $this->conexion = mysqli_connect($this->host, $this->usuario, $this->password, $this->bd);
        if (!$this->conexion) {
            die("Error en la conexión a BD: " . mysqli_connect_error());
        }
    }

    // Método estático para obtener la única instancia de la clase
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new ConexionBD();
        }
        return self::$instance;
    }

    // Método para obtener la conexión mysqli
    public function getConexion() {
        return $this->conexion;
    }
}
?>