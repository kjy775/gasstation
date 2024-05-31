<?php
$writer = $_POST['writer'];
$title = $_POST['title'];
$contents = $_POST['contents'];
echo $writer;
echo $title;
echo $contents;

$sql="insert into board(title, contents,write_name,reg_date, read_num) values('".$title."','".$contents."','".$writer."',sysdate(),0)";
//echo $sql;
$host = 'localhost'; // MySQL 호스트
$username = 'dietmall'; // MySQL 사용자명
$password = '1111'; // MySQL 비밀번호
$database = 'dietmall'; // 사용할 데이터베이스명
$conn = mysqli_connect($host, $username, $password, $database);
mysqli_set_charset($conn, "utf8");
$result = mysqli_query($conn, $sql);
?>