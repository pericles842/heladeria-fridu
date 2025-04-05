<?php
header('Content-Type: application/json');
require_once('../conexion_db.php');
include('../responses.php');
// error_reporting(0);
// ini_set('display_errors', 0);
// error_reporting(0); // Activa la visualización de todos los errores

// Función para crear cuenta con manejo de errores
function listWarehouses($conn)
{
    try {
        // Preparar la consulta SQL
        $stmt = $conn->prepare("SELECT * FROM warehouses");

        // Verificar si la preparación de la consulta fue exitosa
        if ($stmt === false) {
            sendResponse(false, 'Error en la preparación de la consulta' . $stmt->error, null);
        }

        // Ejecutar la consulta
        if (!$stmt->execute()) {
            sendResponse(false, 'Error al insertar el registro ' . $stmt->error, null);
        }

        // Conten los registros
        $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);;

        // Respuesta exitosa
        sendResponse(true, '',  $result);
    } catch (Exception $e) {
        // Respuesta con el mensaje de error
        sendResponse(false, 'Error: ' . $e->getMessage(), null);
    } finally {
        // Cerrar la conexión y la declaración si están abiertas
        $stmt->close();
        $conn->close();
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo listWarehouses($conn);
}
