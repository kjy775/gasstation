<?php
$board_idx = $_GET['board_idx'];
echo $board_idx;
$host = 'localhost'; // MySQL 호스트
$username = 'dietmall'; // MySQL 사용자명
$password = '1111'; // MySQL 비밀번호
$database = 'dietmall'; // 사용할 데이터베이스명

$conn = mysqli_connect($host, $username, $password, $database);
mysqli_set_charset($conn, "utf8");
if (!$conn) {
    die('MySQL 연결 실패: ' . mysqli_connect_error());
}
$query = "SELECT * FROM board where board_idx=".$board_idx;
//echo $query;
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
echo $row['title'];
?>