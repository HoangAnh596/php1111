<?php

// Khai báo trait Name
trait Name
{
    private static $name = 'Chưa xét';

    public function setName($name)
    {
        self::$name = $name;
    }

    public function getName()
    {
        return self::$name;
    }
}

//Khai báo class ConNguoi
class ConNguoi
{
    //gọi trait Name
    use Name;
}

//Khai báo class NguoiLon
class NguoiLon
{
    //gọi trait Name
    use Name;
}

// khởi tạo class ConNguoi
$connguoi = new ConNguoi();

//setName
$connguoi->setName('Vũ Thanh Tài');

//getName
echo $connguoi->getName();
//Kết Quả: Vũ Thanh Tài

//Khởi tạo class ConNguoi
$trecon = new ConNguoi();

//getName
echo $trecon->getName();
//Kết Quả: Vũ Thanh Tài

//Khởi tạo class NguoiLon 
$nguoilon = new NguoiLon();

//getName
echo $nguoilon->getName();
//Kết Quả: Chưa xét