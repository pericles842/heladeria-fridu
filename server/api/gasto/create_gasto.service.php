<?php
header('Content-Type: application/json');

require_once('../conexion_db.php');
include('../responses.php');

// Función para crear un provedor
function createBills($conn, $total, $description, $id_provider, $date_today)
{
    try {
        // Preparar la consulta SQL 
        $stmt = $conn->prepare("INSERT INTO bills (	total_amount ,description, provider_id, created_at ) VALUES (?,?,?,?)");

        // Verificar si la preparación de la consulta fue exitosa
        if ($stmt === false) {
            sendResponse(false, 'Error en la preparación de la consulta' . $stmt->error, null);
        }

        // Vincular los parámetros
        $stmt->bind_param("isis", $total, $description, $id_provider, $date_today);

        // Ejecutar la consulta
        if (!$stmt->execute()) {
            sendResponse(false, 'Error al insertar el registro ' . $stmt->error, null);
        }

        // Respuesta exitosa
        sendResponse(true, 'Categoría creada exitosamente.', null);
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

    echo createBills($conn, $_POST['monto'], $_POST['description'], $_POST['proveedor'], $_POST['fecha']);
}
