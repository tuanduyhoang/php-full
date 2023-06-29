<!-- Buổi 12: PHP
môi trường:xampp, lammpp,mamp
toán tử và biểu thức
làm việc với biến hằng , kiểu dữ  liệu, toán tử,cấu trức điều khiển nhánh 
lệnh lăp: for, foreach, while, do...while
-->

 <?php  // mở  php
//$name = 'vũ thị xuân hương';
// $age = 10;
// $gender = true;


// echo '<h1>' . $name . '</h1>'; // nối chuỗi bằng dấu chấm
// echo "<br>";
// echo "<h1> $name </h1>";
// echo "<br>";
// echo $age;
// echo $gender;


// toán tử số học : +,- ,*,/, %

// $soA = 1;
// $soB = 3;
// $soC=$soA - $soB;

// // toán tử gán : =,+=,-=
// $a = 2;
// $a += 4;  // $a = $a+4
// // so sánh : <,<=,>,>=, == , ===,!=,!==...
// // !ok = not ok
// echo $soC;
// // if, if else, else if, 
// // kiểm tra điều kiện
// // kiểm tra số 5 có phải là số lẻ hay không

// /** jjv
//  * mvkvknv
//  */ 
// // coment nhiều dòng
// echo "<br>";
// $a = 5;
// if ( $a % 2!= 0) {
//     echo " $a là số lẻ";
// } else echo " $a là số chẵn  ";

// echo "<br>";
// $x = 1;
// switch($x){
//     case 0: echo "thứ hai";
//     break;
//     case 1: echo "thứ ba";
//     break;
//     case 2: echo "thứ tư";
//     break;
//     case 3: echo "thứ năm";
//     break;
//     case 4: echo "thứ sáu";
//     break;
//     case 5: echo "thứ bảy";
//     break;
//     case 6: echo "chủ nhật";
//     break;
//     default: echo " không phải ngày trong tuần";
// }


// // vòng lặp
// // for , while, do whlie, foreach

// for ($a = 0; $a <10; $a++){
//     echo " lần lặp thứ $a <br>";
// }

// $arr = [1,'abc', true, 2,5,6];
// count($arr); // lấy ra số lượng phần tử của mảng 
// for ($i = 0; $i < 6 ;$i++) {
//     echo "$arr[$i] <br>";
// }
// foreach($arr as $key => $value){
//     echo "key= $key && value = $value <br>";
// }

// $a = [1,2,3,5,9,12,16,15];
// $tongchan = 0;
// $tongle = 0;
// for ($i = 0; $i < count($a) ; $i++){
//     if ($a[$i]% 2 !=0){
//         echo " $a[$i] là số lẻ <br> ";
//         $tongle += $a[$i];
//     }
//     else { 
//         echo " $a[$i] là số chẵn <br> ";
//         $tongchan += $a[$i];
//     }
// }
// echo " tong các số chẵn là : $tongchan";
// echo "<br>";

// echo " tong các số lẻ là : $tongle";
// echo "<br>";


// for ($i = 0; $i < count($a) ; $i++){
//     if ($a[$i] == 5) continue;
//     echo "$a[$i] <br>";

// }

// echo "<br>";


// for ($i = 0; $i < count($a) ; $i++){
//     if ($a[$i] == 5) break;
//     echo "$a[$i] <br>";

// }
// for ($i = 0; $i < count($a) ; $i++){
//     if ($a[$i] ==1 ) echo " $a[$i] không phải là số nguyên tố <br> " ;
//     for ($j = 2; $j < $a[$i]; $j++){
//         if ($a[$i] % $j ==0 ) {
//             echo " $a[$i] không phải là số nguyên tố  <br> ";
//             break;

//         }
//     }
    

// }




// mảng 1 chiều, mảng 2 chiều

// $arr = [1,2,3,4,5,6];
// $arr2 = [
//     [1,2,5,6,7,8],
//     [1,2,5,6,7,8],
//     [10000,2,5,6,7,8],
//     [1,2,5,6,7,8],

// ];  
// $sum = 0;
// $tongle = 0;
// $mangmoi = [];
// for($i = 0;$i< count($arr2);$i++){
//     for($j = 0;$j < count($arr2[$i]);$j++){
//         echo $arr2[$i][$j]. '<br>';
//         $sum += $arr2[$i][$j];
//     }
// };

// echo "tong các phần tử trong mảng là : $sum";

// for($i = 0;$i< count($arr2);$i++){
//     for($j = 0;$j < count($arr2[$i]);$j++){
//         if ($arr2[$i][$j] % 2 != 0 ){
//             $tongle += $arr2[$i][$j];
//         }
        
//     }
// };
// echo "<br>";
// echo " tông các số lẻ là : $tongle";

// echo "<br>";
// for($i = 0;$i< count($arr2);$i++){
//     for($j = 0;$j < count($arr2[$i]);$j++){
//         for ($x = 2; $x < $arr2[$i][$j]; $x++) {
//         if ($arr2[$i][$j] %  $x == 0 ){
//             echo "$arr2[$i][$j]  không phải là số nguyên tố";
//         }
//     }
//     }
// }


// $products = [
//     ['abc','https://vapa.vn/wp-content/uploads/2022/12/anh-3d-thien-nhien.jpeg',300],
//     ['abc1','https://vapa.vn/wp-content/uploads/2022/12/anh-3d-thien-nhien.jpeg',301],
//     ['abc2','https://vapa.vn/wp-content/uploads/2022/12/anh-3d-thien-nhien.jpeg',302]

// ];
// ?>
<!-- // <!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <meta http-equiv="X-UA-Compatible" content="IE=edge">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <title>Document</title>
// </head>
// <body>
//     <table border ="1">
//         <tr>
//             <th>STT</th>
//             <th>Tên </th>
//             <th>Hình ảnh</th>
//             <th>giá</th>
//         </tr>
//     <?php
//         foreach ($products as $index => $product ){
//  ?>
//     <tr>
//         <td>
//             <?php echo $index ?>
//         </td>
//         <td>
//             <?php echo $product[0] ?>
//         </td>
//         <td>
//             <img style = "width:200px" src="<?php echo $product[1] ?>" alt="">
//         </td>
//         <td>
//             <?php echo $product[2] ?>
//         </td>
//     </tr>
// <?php //}
//     ?>
//     </table>
// </body>
// </html> -->

