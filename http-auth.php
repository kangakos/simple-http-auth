<?php

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
$app      = $_POST['app'] ?? '';
$token    = $_POST['token'] ?? '';

$valid_user = "ade";
$valid_pass = "123";
$valid_token = "abc123";

if ($username === $valid_user &&
    $password === $valid_pass &&
    $app === "portal" &&
    $token === $valid_token) {

    http_response_code(200);
    echo "LOGIN SUCCESS";

} else {
    http_response_code(401);
    echo "LOGIN FAILED";
}
?>
