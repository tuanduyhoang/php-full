<?php 
session_start();

if($_SESSION['product']) {
    $productOders = $_SESSION['product'];
} else {
    $productOders = [];
}


$item['id'] = $_POST['id'];
$item['qty'] = $_POST['qty'];

array_push($productOders, $item);
$_SESSION['product'] = $productOders;

// đề bài: có 2 sản phẩm 1 và 2
// khi người dùng mua sp1 -> lưu vào session
// khi người dùng mua sp2 -> lưu thêm vào session
// khi người dùng mua sp 1 -> update số lượng sản phẩm
// hướng dẫn if else, for

