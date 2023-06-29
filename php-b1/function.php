<?php 

function tinhTong($a, $b) {
    echo $a + $b;
    return $a + $b;
}

tinhTong(1,2);

// có tham số ko có return
// ko có tham số và ko có return
// có tham số có return
// ko có tham số và có return
// bài tập
// viết function in ra câu lệnh sql select dữ liệu của bảng posts
// viết funtion in ra các câu lệnh sau
    // lấy ra 4 sản phẩm có tên chứa ký tự được nhập vào
    // thêm sản phẩm vào bảng có các trường: tên, số lượng, giá, nhà cung cấp: nhập vào
    // xoá sản phẩm có id nhập vào
    // lấy ra 4 sản phẩm có tên chứa ký tự được nhập vào và số lượng = nhập vào
    // lấy ra tất cả các sản phẩm, nếu có giới hạn số lượng phần tử thì giới hạn, 
        // nếu có id nhập vào thì chỉ lấy sp có id nhập vào

function selectPostByName($name, $limit = 4) {
    $sql = "SELECT * FROM posts where name = '%$name%' limit $limit;";
    echo $sql;
}
function insertProduct($name, $qty, $price, $prod_er) {
    $sql = "INSERT INTO products (name, qty, price, prod_er)
            VALUES ($name, $qty, $price, $prod_er);";
    echo $sql;
}
function delProductById($id) {
    $sql = "DELETE FROM products WHERE id = $id;";
    echo $sql;
}


function selectPostById($id)
{
    $sql = "SELECT * FROM posts where id = $id";
    echo $sql;
}

echo selectPostByName('dung');

echo "<br>";

function _select($tableName) {
    return "SELECT * FROM $tableName";
}

function _where($field, $value)
{
    return " where $field = $value";
}
function andWhere($field, $value)
{
    return " and $field = $value";
}

function orWhere($field, $value)
{
    return " or $field = $value";
}


echo _select("categories") . _where('id', 4);
echo "<br>";

$sql =  _select("news") . _where('id', 5) . andWhere('name', 'dung') . orWhere('qty', '3');

echo $sql;
