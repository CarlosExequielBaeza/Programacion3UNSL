<?php
class ConexionBD {
    private $dbhost;
    private $dbusuario;
    private $dbpass;
    private $dbname;
    private $conexion;

    // Constructor
    public function __construct($dbhost = "localhost", $dbusuario = "root", $dbpass = "", $dbname = "verydeli") {
        $this->dbhost = $dbhost;
        $this->dbusuario = $dbusuario;
        $this->dbpass = $dbpass;
        $this->dbname = $dbname;
        $this->conectar();
    }

    // Método que crea la conexión a la base de datos
    private function conectar() {
        $this->conexion = new mysqli($this->dbhost, $this->dbusuario, $this->dbpass, $this->dbname);

        if ($this->conexion->connect_errno) {
            die("Fallo al conectar con la base de datos: " . $this->conexion->connect_errno);
        }
    }

    // Método para obtener la conexión 
    public function getConexion() {
        return $this->conexion;
    }

    // Método para cerrar la conexión
    public function cerrarConexion() {
        $this->conexion->close();
    }
}
