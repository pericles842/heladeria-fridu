<?php
header('Content-Type: application/json');

require_once('../conexion_db.php');
include('../responses.php');

// Función para crear cuenta con manejo de errores
function createAccount($conn, $name, $email, $password, $role_id)
{
    try {
        // Preparar la consulta SQL
        $stmt = $conn->prepare("INSERT INTO users (nombre, email, password, rol_id) VALUES (?, ?, ?, ?)");

        // Verificar si la preparación de la consulta fue exitosa
        if ($stmt === false) {
            sendResponse(false, 'Error en la preparación de la consulta' . $stmt->error, null);
        }

        // Vincular los parámetros
        $stmt->bind_param("sssi", $name, $email, $password, $role_id);

        // Ejecutar la consulta
        if (!$stmt->execute()) {
            sendResponse(false, 'Error al insertar el registro ' . $stmt->error, null);
        }

        // Respuesta exitosa
        sendResponse(true, 'Usuario creado exitosamente.', null);
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

    $role_id =  isset($_POST['role_id']) ? $_POST['role_id'] : 3;
    echo createAccount($conn, $_POST['nombre'], $_POST['email'], $_POST['password'], $role_id);
}
