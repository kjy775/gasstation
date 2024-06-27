<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>홈페이지</title>
</head>
<body>
    <h2>홈페이지</h2>
    <p>안녕하세요, <?php echo htmlspecialchars($_SESSION['username']); ?>님!</p>
    <a href="logout.php">로그아웃</a>
</body>
</html>
