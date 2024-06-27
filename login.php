<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $users = file('users.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $user_found = false;

    foreach ($users as $user) {
        list($saved_username, $saved_email, $saved_hashed_password) = explode(", ", $user);
        $saved_username = str_replace("Username: ", "", $saved_username);
        $saved_email = str_replace("Email: ", "", $saved_email);
        $saved_hashed_password = str_replace("Password: ", "", $saved_hashed_password);

        if ($saved_email === $email && password_verify($password, $saved_hashed_password)) {
            $_SESSION['username'] = $saved_username;
            $_SESSION['email'] = $saved_email;
            $user_found = true;
            break;
        }
    }

    if ($user_found) {
        echo "로그인이 완료되었습니다!";
    } else {
        echo "이메일 또는 비밀번호가 올바르지 않습니다.";
    }
} else {
    echo "잘못된 접근입니다.";
}
?>
