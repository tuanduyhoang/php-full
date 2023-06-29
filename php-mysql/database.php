<?php 
// echo "<pre>";
// mysql -> start ở xampp
$hostname = '127.0.0.1'; // or localhost
$port = 3308;
$databaseName = 'php_mysql'; // tự đặt: tạo trong phpmyadmin  hoặc câu lênh
$username = 'root'; // win -> root
$password = ''; // win -> trống

// kết nối với mysql thông qua hàm mysqli_connect
$connect = mysqli_connect($hostname, $username, $password, $databaseName, $port);
// thham số đầu tiên là hosname, 2: username của mysql, 
// 3:password của mysql
// 4: db name, 5 port

// Check connection
if (!$connect) {
  die("Connection failed: " . mysqli_connect_error());
}

// echo "Connected successfully";
// viết câu lệnh sql 

// $user = "INSERT INTO users (name, email, password, status, avatar)
// VALUE ('Hoang Duy','sc.duyhoang@gmail.com','abcabc2',1,
// 'https://tuiriviu.com/wp-content/uploads/2023/05/Linh-Miu-tiet-lo-cat-xe-9-chu-so-noi-mot-cau-ve-scandal-trong-qua-khu-z3024416864099_62fc6a65e80b6785657e8cb3f8438f12-1639561306-766-width852height1280.jpg');";

// thực thi câu lệnh sql với hàm mysqli_query

// $check = mysqli_query($connect, $user);
// var_dump($check);die;







