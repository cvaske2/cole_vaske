<?php
// $EMAIL_REGEX = "/(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|\"(?:[\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x21\\x23-\\x5b\\x5d-\\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9]))\.){3}(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9])|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/";
function submitMessage($message, $email) {
    $fp = fopen(BASE_DIR_PREFIX."logs/contact_submissions.txt", "a");
    $input = buildDateHeader()."\n[SENDER] $email\n[MESSAGE]\n\n".trim($message)."\n\n[END MESSAGE]\n";
    fwrite($fp, $input);
    fclose($fp);
}

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