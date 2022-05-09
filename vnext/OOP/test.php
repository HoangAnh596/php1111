<?php
//Khởi tạo mảng có key tự tăng.
$data = [
    'A',
    'B',
    'C',
    'D'
];
// Lặp cả key lẫn value của mảng
foreach ($data as $key => $value) {
    echo "Đây là phần tử có key = $key và có giá trị= $value <br/>";
}
// Tạo khoảng phân cách để dễ phân biệt
echo "_________________________________________________________________ <br/>";
// Lặp value của mảng
foreach ($data as $value) {
    echo "Giá trị phần tử= $value <br/>";
}

$i = 0; // khởi tạo biến
while ($i <= 10 /* điều kiện dừng*/) {
    echo $i . "<br>"; // in ra số
    $i++; //sau mỗi lần lặp biến $i tăng thêm 1 đơn vị
}

$i = 0;
do {
    $j = $i;
    do {
        echo "*";
        $j++;
    } while ($j <= 10);
    echo "<br>";
    $i++;
} while ($i <= 10);
?>