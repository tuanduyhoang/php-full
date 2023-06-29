<?php 

require_once './database.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$avatar = $_POST['avatar'];
$id = $_POST['id'];
// $status = 1;

$sql = "UPDATE users
SET name = '$name', email = '$email', 
password = '$password', avatar = '$avatar'
WHERE id = $id;";
// var_dump($sql);die;

$user = mysqli_query($connect, $sql);

var_dump($user);