<?php 
session_start();

var_dump($_SESSION);


?>
<form action="./handleSubmit.php" method="POST">
    <!-- action -> địa điểm gửi dữ liệu đến -->
    sản phẩm 1
    <br>
    <input type="text" name="id" value="1">
    <br>
    <input type="number" name="qty"  >
    <br>
    <button type="submit">mua ngay</button>
</form>

<form action="./handleSubmit.php" method="POST">
    <!-- action -> địa điểm gửi dữ liệu đến -->
    sản phẩm 2
    <br>
    <input type="text" name="id" value="2">
    <br>
    <input type="number" name="qty"  >
    <br>
    <button type="submit">mua ngay</button>
</form>


