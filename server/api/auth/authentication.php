<?php

require_once('../../conexion_db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $contraseña = $_POST['contraseña'];
    echo "<p>Gracias, $nombre. Tu email ($contraseña) ha sido recibido.</p>";
}
?>