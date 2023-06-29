<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./handleLogin.php" method="POST">
        <input type="text" name="email" placeholder="nhập email">
        <input type="password" name="password" placeholder="nhập mật khẩu">
        <button type="submit">Nhập</button>
    </form>
    
    <?php
    require_once './layout/notice.php'; 
    ?>
</body>
</html>