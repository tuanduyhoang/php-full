<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./handleRegister.php" method="POST">
        name
        <input type="text" name="name">
        <br>
        email
        <input type="email" name="email">
        <br>
        avatar
        <input type="text" name="avatar">
        <br>
        password 
        <input type="password" name="password">
        <br>
        <button type="submit">đăng ký</button>
    </form>

    <?php
    require_once './layout/notice.php'; 
    ?>
</body>
</html>