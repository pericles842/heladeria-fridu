<?php
header('Content-Type: application/json');

require_once('../conexion_db.php');
include('../responses.php');

// Función para crear un proveedor
function createProduct(
    $conn,
    $name,
    $reference,
    $description,
    $discount,
    $unit_price,
    $status,
    $stock,
    $category_id,
    $warehouse_id
) {
    try {
        // Preparar la consulta SQL
        $stmt = $conn->prepare("INSERT INTO products 
        (name, reference, description, discount, unit_price, status, stock, category_id, warehouse_id, created_at) VALUES
        (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        // Verificar si la preparación de la consulta fue exitosa
        if ($stmt === false) {
            sendResponse(false, 'Error en la preparación de la consulta' . $stmt->error, null);
        }

        $created_at = date('Y-m-d H:i:s');
        
        // Vincular los parámetros
        $stmt->bind_param(
            "sssiisiiis",
            $name,
            $reference,
            $description,
            $discount,
            $unit_price,
            $status,
            $stock,
            $category_id,
            $warehouse_id,
            $created_at
        );

        // Ejecutar la consulta
        if (!$stmt->execute()) {
            sendResponse(false, 'Error al insertar el registro ' . $stmt->error, null);
        }

        // Respuesta exitosa
        sendResponse(true, 'Producto creado exitosamente.', null);
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

    echo createProduct(
        $conn,
        $_POST['name'],
        $_POST['reference'],
        $_POST['description'],
        $_POST['discount'],
        $_POST['unit_price'],
        $_POST['status'],
        $_POST['stock'],
        $_POST['category_id'],
        $_POST['warehouse_id']
    );
}
