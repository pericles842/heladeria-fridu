<?php
function sendResponse($success, $message, $data)
{
    $response = [
        'success' => $success,
        'message' => $message,
        'data' => $data
    ];

    echo json_encode($response);
    exit(); // Termina la ejecución después de enviar la respuesta
}
