<?php 
// include './database.php'; cách 1 
// include_once './database.php';
// require './database.php'; cách 2
require_once './database.php';


$name = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['password']); // mã hóa password trước khi cho vào db
$avatar = $_POST['avatar'];
$status = 1;

// viết câu lệnh sql

$user = "INSERT INTO users (name, email, password, status, avatar)
VALUES ('$name', '$email', '$password', $status, '$avatar');";


// thực thi câu lệnh sql với hàm mysqli_query
$check = mysqli_query($connect, $user);

// nếu thành công -> true, thất bại -> false


if($check == true) {
    // đi đến trang đăng nhập
    header('location: ./login.php?status=1');
} else {
    // quay trở lại trang đăng ký
    header('location: ./register.php?status=2');
}

// check
// var_dump($check);die;
