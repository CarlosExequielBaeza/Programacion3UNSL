<?php

$dbhost = "localhost";
$dbusuario = "root";
$dbpass = "";
$db = "verydeli";

$conexion = new mysqli($dbhost, $dbusuario, $dbpass, $db);

if($conexion -> connect_errno){
    die("Fallo al conectar con base de datos" . $conexion->connect_errno );


}
else {
    echo "Conectado correctamente";


}

?>