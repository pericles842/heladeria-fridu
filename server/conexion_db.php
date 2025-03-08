<?php
const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASS = '';
const DB_NAME = 'heladería_fridu';

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    //MENSAJE DE CONFIRMACIÓN QUITAR EL ELSE PARA QUE NO SE VEA
    echo "Conectado a la base de datos con Exito";
}

