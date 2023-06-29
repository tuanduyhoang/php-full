<?php
// khởi tạo session
// var_dump($_POST);die;
session_start();
require_once './database.php';
// var_dump($_POST);
$email = $_POST['email'];
$password = md5($_POST['password']);

$login = "SELECT * FROM users
WHERE email = '$email' 
and password = '$password' LIMIT 1;";


$user = mysqli_query($connect,$login);

$user = mysqli_fetch_assoc($user);
if (!$user){
    //thất bại
    header('location: ./login.php?status=3');
    
}
// thêm thông tin user và check_login vào session
$_SESSION['user'] = $user;
// var_dump($_SESSION);
$_SESSION['check_login'] = true;

header('location: ./home/index.php?status=4');

