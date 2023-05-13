<?php
try {
    $payload = json_decode(file_get_contents('php://input'), true);
    $response["status"] = 200;
    $response["email"] = $payload["email"];

    echo json_encode($response);
} catch (Exception $e) {
    $response["status"] = 404;
    $response["error"] = $e;
    echo json_encode($response);
}
?>