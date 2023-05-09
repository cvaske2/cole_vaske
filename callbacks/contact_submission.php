<?php
try {
    $payload = json_decode(file_get_contents('php://input'), true);

    echo "<p>Your form has been successfully submitted. Thank you for contacting me.</p>
        <p>Your supplied e-mail: <u>".$payload["email"]."</u></p>";
} catch (Exception $e) {
    echo $e;
}
?>