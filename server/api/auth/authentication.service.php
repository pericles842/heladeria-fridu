<?php
header('Content-Type: application/json');
require_once('../conexion_db.php');
include('../responses.php');
// error_reporting(0);
// ini_set('display_errors', 0);
// error_reporting(0); // Activa la visualización de todos los errores

// Función para crear cuenta con manejo de errores
function validateAccount($conn, $email, $password)
{
    try {
        // Preparar la consulta SQL
        $stmt = $conn->prepare("SELECT users.id, users.nombre, users.email, users.rol_id, roles.nombre cargo,
        roles.modules AS permission
        FROM users INNER JOIN roles on roles.id = users.rol_id
         WHERE users.email = ? and users.password = ?;");

        // Verificar si la preparación de la consulta fue exitosa
        if ($stmt === false) {
            sendResponse(false, 'Error en la preparación de la consulta' . $stmt->error, null);
        }

        // Vincular los parámetros
        $stmt->bind_param("ss",  $email, $password);

        // Ejecutar la consulta
        if (!$stmt->execute()) {
            sendResponse(false, 'Error al insertar el registro ' . $stmt->error, null);
        }


        // Conten los registros
        $result = $stmt->get_result();
        if ($result->num_rows === 0) {
            sendResponse(false, 'Credenciales incorrectas', null);
        }
        $usuarios = $result->fetch_assoc();
        $usuarios['permission'] = json_decode($usuarios['permission']);

        // Respuesta exitosa
        sendResponse(true, 'Bienvenido ' . $usuarios['nombre'], $usuarios);
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
    echo validateAccount($conn, $_POST['email'], $_POST['password']);
}
