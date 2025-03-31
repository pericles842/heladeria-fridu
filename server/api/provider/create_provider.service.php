<?php
header('Content-Type: application/json');

require_once('../conexion_db.php');
include('../responses.php');

// Función para crear un provedor
function createProvider($conn, $company, $tel, $email, $rif, $location)
{
    try {
        // Preparar la consulta SQL
        $stmt = $conn->prepare("INSERT INTO providers (company,tel,email,location,rif) VALUES (?, ?, ?, ?, ?)");

        // Verificar si la preparación de la consulta fue exitosa
        if ($stmt === false) {
            sendResponse(false, 'Error en la preparación de la consulta' . $stmt->error, null);
        }

        // Vincular los parámetros
        $stmt->bind_param("sssss", $company, $tel, $email, $location, $rif);

        // Ejecutar la consulta
        if (!$stmt->execute()) {
            sendResponse(false, 'Error al insertar el registro ' . $stmt->error, null);
        }

        // Respuesta exitosa
        sendResponse(true, 'Proveedor creado exitosamente.', null);
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

    echo createProvider($conn, $_POST['company'], $_POST['tel'], $_POST['email'], $_POST['rif'], $_POST['location']);
}
