<?php
session_start();

header('Content-Type: application/json');

$response = [
    'loggedIn' => isset($_SESSION['username']),
    'username' => isset($_SESSION['username']) ? $_SESSION['username'] : '',
    'email' => isset($_SESSION['email']) ? $_SESSION['email'] : ''
];

echo json_encode($response);
?>
