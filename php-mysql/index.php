<?php  
    require_once './getUser.php';
    // echo "<pre>";
    // var_dump($users);
    // die;
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
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>email</th>
            <th>Status</th>
            <th>Avatar</th>
            <th>Action</th>
        </tr>
        <!-- foreach để hiển thị dữ liệu -->
        <?php foreach($users as $user) : ?>
        <tr>
            <td><?= $user[0] ?></td>
            <td><?= $user[1] ?></td>
            <td><?php echo $user[2] ?></td>
            <td>
                <?php 
                    // sử dụng toán tử 3 ngôi để in ra trạng thái người dùng
                    echo $user[4] == 1 
                    ? '<span style="color: green"> active </span>' 
                    : '<span style="color: red">deactive</span>'  
                ?>
            </td>
            <td>
                <img style="width: 130px" src="<?php echo $user[5] ?>" alt="">
            </td>
            <td>
                <!-- truyền id sang file handleDelete bằng phương thức get -->
                <!-- <a href="./handleDelete.php?id=<?php echo $user[0] ?>">Xoá</a> -->
                <form action="./handleDelete.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $user[0] ?>">
                    <button type="submit">Xóa</button>
                </form>

                <a href="./edit.php?id=<?php echo $user[0] ?>">Sửa</a>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>