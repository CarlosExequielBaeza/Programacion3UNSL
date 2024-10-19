<?php

class Usuario {
    private $conexion;  // Conexión a la base de datos
    private $id_usuario;
    private $dni;
    private $nombre;
    private $apellido;
    private $email;
    private $contraseña;
    private $telefono;
    private $direccion;
    private $estado;
    private $fecha_registro;

    // Constructor: recibe la conexión a la base de datos
    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    // Método para registrar un nuevo usuario
    public function registrar($dni, $nombre, $apellido, $email, $contraseña, $telefono, $direccion) {
        $hashPassword = password_hash($contraseña, PASSWORD_BCRYPT); // Encriptar la contraseña

        $sql = "INSERT INTO usuarios (dni, nombre, apellido, email, contraseña, telefono, direccion, estado, fecha_registro) 
                VALUES (?, ?, ?, ?, ?, ?, ?, 1, NOW())";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("sssssss", $dni, $nombre, $apellido, $email, $hashPassword, $telefono, $direccion);
        
        if ($stmt->execute()) {
            return true;  // Registro exitoso
        } else {
            return false; // Error al registrar
        }
    }

    // Método para iniciar sesión
    public function iniciarSesion($email, $contraseña) {
        $sql = "SELECT id_usuario, contraseña FROM usuarios WHERE email = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado->num_rows == 1) {
            $usuario = $resultado->fetch_assoc();
            if (password_verify($contraseña, $usuario['contraseña'])) {
                // Inicio de sesión exitoso
                $this->id_usuario = $usuario['id_usuario'];
                return true;
            } else {
                // Contraseña incorrecta
                return false;
            }
        } else {
            // Usuario no encontrado
            return false;
        }
    }

    // Método para obtener la información del usuario
    public function obtenerInformacion($id_usuario) {
        $sql = "SELECT dni, nombre, apellido, email, telefono, direccion, estado, fecha_registro 
                FROM usuarios WHERE id_usuario = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("i", $id_usuario);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado->num_rows == 1) {
            $usuario = $resultado->fetch_assoc();
            $this->dni = $usuario['dni'];
            $this->nombre = $usuario['nombre'];
            $this->apellido = $usuario['apellido'];
            $this->email = $usuario['email'];
            $this->telefono = $usuario['telefono'];
            $this->direccion = $usuario['direccion'];
            $this->estado = $usuario['estado'];
            $this->fecha_registro = $usuario['fecha_registro'];
            return $usuario;
        } else {
            return null; // Usuario no encontrado
        }
    }

    // Métodos getters para acceder a los atributos privados (opcional)
    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    // Puedes agregar más getters si es necesario...
}
?>