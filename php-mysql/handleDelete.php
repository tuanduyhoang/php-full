<?php  

// bài tập về nhà: chuyển từ kiểu get sang post
require_once './database.php';
// lấy id từ GET
// $id = $_GET['id'];
$id = $_POST['id'];

// câu lệnh sql xoá
$sql = "DELETE FROM users WHERE id = $id;";

// thực thi câu lệnh sql
mysqli_query($connect, $sql);