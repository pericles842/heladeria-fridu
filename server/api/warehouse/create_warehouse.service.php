<?php
header('Content-Type: application/json');

require_once('../conexion_db.php');
include('../responses.php');

// Función para crear un provedor
function createWarehouse($conn, $name, $cod, $loca, $status)
{
    try {
        // Preparar la consulta SQL 
        $stmt = $conn->prepare("INSERT INTO warehouses (name,code,location,status) VALUES (?, ?, ?, ?)");

        // Verificar si la preparación de la consulta fue exitosa
        if ($stmt === false) {
            sendResponse(false, 'Error en la preparación de la consulta' . $stmt->error, null);
        }

        // Vincular los parámetros
        $stmt->bind_param("ssss", $name, $cod, $loca, $status);

        // Ejecutar la consulta
        if (!$stmt->execute()) {
            sendResponse(false, 'Error al insertar el registro ' . $stmt->error, null);
        }

        // Respuesta exitosa
        sendResponse(true, 'Almacén creado exitosamente.', null);
    } catch (Exception $e) {
        // Respuesta con el mensaje de error
        sendResponse(false, 'Error: ' . $e->getMessage(), null);
    } finally {
        // Cerrar la conexión y la declaración si están abiertas
        $stmt->close();
        $conn->close();
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    echo createWarehouse($conn, $_POST['name'], $_POST['code'], $_POST['location'], $_POST['status']);
}
