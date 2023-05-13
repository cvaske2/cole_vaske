<?php
define('BASE_DIR_PREFIX' , "../"); // Prefix to the base dir (for images, etc.)
require_once(BASE_DIR_PREFIX."include/logging.php");

function submitMessage($message, $email) {
    $fp = fopen(BASE_DIR_PREFIX."logs/contact_submissions.txt", "a");
    $input = buildDateHeader()."\n[SENDER] $email\n[MESSAGE]\n\n".trim($message)."\n\n[END MESSAGE]\n";
    fwrite($fp, $input);
    fclose($fp);
}

function errorHandler($errno, $errstr) {
    $response["error"] = true;
    $response["status"] = $errno;
    $response["error"] = $errstr;

    echo json_encode($response);
    return true;
}
set_error_handler("errorHandler");

try {
    $payload = json_decode(file_get_contents('php://input'), true);
    $response["status"] = 200;
    $response["email"] = $payload["email"];

    if (filter_var($payload["email"], FILTER_VALIDATE_EMAIL)) {
        submitMessage($payload["message"], $payload["email"]);
    } else {
        $response["status"] = 409;
        $response["body"] = "Please provide a valid e-mail address.";
    }
    echo json_encode($response);
} catch (Exception $e) {
    $response["status"] = 404;
    $response["error"] = $e;
    echo json_encode($response);
}
?>