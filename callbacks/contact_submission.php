<?php
try {
    $payload = json_decode(file_get_contents('php://input'), true);
    $response["status"] = 200;
    $response["body"] = "<p>Your form has been successfully submitted. Thank you for contacting me.</p>
        <p>Your supplied e-mail: <u>".$payload["email"]."</u></p>";

    echo json_encode($response);
} catch (Exception $e) {
    $response["status"] = 404;
    $response["error"] = $e;
    echo json_encode($response);
}
?>