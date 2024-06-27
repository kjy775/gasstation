<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($username) || empty($email) || empty($password)) {
        die("모든 필드를 채워주세요.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("올바른 이메일 주소를 입력하세요.");
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $data = "Username: $username, Email: $email, Password: $hashed_password\n";
    file_put_contents('users.txt', $data, FILE_APPEND);

    echo "회원가입이 완료되었습니다!";
} else {
    echo "잘못된 접근입니다.";
}
?>
