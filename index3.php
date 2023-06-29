
<!-- buổi 13 : quản lí phiên làm việc
các phương thức truyền dữ liệu: post, get,request
$_SESSION
$_COOKIE
$_SERVER
-->
<!-- biến siêu toàn cục -->
<?php
// biến siêu toàn cục
// echo "<pre>";
// var_dump($_GET);

// var_dump($_POST);
// var_dump($_FILES);
// sự khác nhau  giữa get và post
// get gửi dữ liệu lên serve bawngd url --> kém bảo mật
// tốc độ get nhanh hơn
// bị giới hạn ký tự trên url


// post gửi dữ liệu lên serve = payload => bảo mật hơn
// tốc độ post chậm hơn
// ko bị giới hạn

?>
<!-- <form action="./" method="GET" enctype='multipart/form-data'>
    <input type="text" name = "school">
    <input type="color" name = "color">
    <input type="file" name = "img">
    <button type = "submit" > gửi form</button>
    
</form>
 -->

<!-- tạo form đăng nhập, sau đó gửi dữ liệu lên server và in ra 
tạo form nhập 2 số , in ra tổng 2 số
gửi lên server 2 file có tên là avartar và cover_photo và in ra thông tin file
-->




<!-- <form method="POST">
    Username: <input type="text" name="username" value=""/> <br/>
    password: <input type="password" name="password" value=""/><br/>
    <input type="submit" name="form_click" value="Gửi Dữ Liệu"/><br/>
    <?php
        // Nếu người dùng click vào button Gửi Dữ Liệu
        // Vì button đó tên là form_click nên đó cũng là
        // tên của key nằm trong biến $_POST
        if (isset($_POST['form_click'])){
            echo 'Tên đăng nhập là: ' . $_POST['username'];
            echo '<br/>';
            echo 'Mật khẩu là: ' . $_POST['password'];
        }
    ?>
</form> -->


<!-- <form action="" method = "POST">
    số a: <input type="text" name = "soA" value = ""/> <br>
    số b: <input type="text" name = "soB" value = ""/> <br>
    <input type="submit" name = "form" value = "gửi dữ liệu"/> <br>
    <?php
    if (isset($_POST['form'])){
        $a = $_POST['soA'];
        $b = $_POST['soB'];
        $a = (int)$a;
        $b = (int)$b;
        $c = $a + $b;
        echo " số a là :$a";
        echo "<br>";
        echo " số b là :$b";
        echo "<br>";
        echo "Tổng của 2 số a và b là : $c";
    }
    ?>
</form> -->

