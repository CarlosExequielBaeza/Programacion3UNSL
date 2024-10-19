<?php
session_start();
include 'conexion.php'; // Incluir tu archivo de conexión

 

    // Consulta para verificar el usuario y contraseña
    $sql = "SELECT * FROM publicaciones";
     $result = mysqli_query($conexion, $sql);

// Verificar si hay resultados
if (mysqli_num_rows($result) > 0) {
    // Salida de cada fila
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<br>".""."<h5>". $row["titulo"] . "</h5>"."<br>";
    }
} else {
    echo "0 resultados";
}

// Cerrar conexión
mysqli_close($conexion);
?>