<?php

require_once './database.php';

$id = $_GET['id'];

$sql = "SELECT * FROM users where id = $id limit 1";

$user = mysqli_query($connect, $sql);

$user = mysqli_fetch_assoc($user);
// var_dump($user);die;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./handleUpdate.php" method="POST">
        <input type="hidden" name='id' value="<?php echo $user['id'] ?>">
        name
        <input type="text" name="name" value="<?php echo $user['name'] ?>">
        <br>
        email
        <input type="email" name="email" value="<?php echo $user['email'] ?>">
        <br>
        avatar
        <input type="text" name="avatar" value="<?php echo $user['avatar'] ?>">
        <br>
        password 
        <input type="password" name="password">
        <br>
        <button type="submit">Sửa tài khoản</button>
    </form>
</body>
</html>