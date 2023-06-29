<?php 

require_once './database.php';

$sql = "SELECT * FROM users";

$users = mysqli_query($connect, $sql);
// lấy dữ liệu thực từ db
$users = mysqli_fetch_all($users);

// $user1 = mysqli_fetch_assoc($users);

// var_dump($user);
// var_dump($user1);



// die;