<?php

class CongDan {
    var $ten;
    var $gioiTinh;
    var $tinhTrangHonNhan = false;
    var $ngaySinh;
    var $tenVoChong;

    function ketHon($tenVoChong) {
        $this->tinhTrangHonNhan = true;
        $this->tenVoChong = $tenVoChong;
    }
    function getgioiTinh() {
        if($this->gioiTinh == 1) {
            return "Nam";
        }elseif($this->gioiTinh == 2) {
            return "Nữ";
        } else {
            return "Khác";
        }
    }
}


$anh = new CongDan();
$anh->ten = "Hoàng Ngọc Anh";
$anh->ngaySinh = "23/05/1996";
$anh->gioiTinh= "1";

$duong = new CongDan();
$duong->ten = "Duong";
$duong->ngaySinh = "1996";
$duong->gioiTinh= "3";

$anh->ketHon($duong->ten);
$duong->ketHon($anh->ten);

$arr = [$anh, $duong];
// echo "<pre>";
// var_dump($arr);

?>
<table>
    <thead>
        <th>Name</th>
        <th>Date</th>
        <th>Gender</th>
        <th>honNhan</th>
        <th>tenVo</th>
    </thead>
    <tbody>
        <?php foreach($arr as $item): ?>  
            <tr>
                <td><?= $item->ten ?></td>
                <td><?= $item->ngaySinh ?></td>
                <td><?= $item->getgioiTinh() ?></td>
                <td><?= $item->tinhTrangHonNhan == true ? "Đã kết hôn" : "Độc thân" ?></td>
                <td><?= $item->tenVoChong ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>