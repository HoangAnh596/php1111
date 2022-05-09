<?php
class ConNguoi
{
    //khai báo thuộc tính động
    public $name;
    public $mat;
    public $mui;
    //khai báo constant
    const SOCHAN = 1;

    //khai báo phương thức
    public function an()
    {
        //code
    }

    public function noi($caunoi)
    {
        //gọi phương thức trong class
        return $this->getSoChan();
    }

    public function di()
    {
        //code
    }

    public function getName()
    {
        //gọi thuộc tính động trong class
        return $this->name;
    }

    public function getSoChan()
    {
        //gọi thuộc tính constant trong class
        return self::SOCHAN;
    }
}

//khởi tạo class
$connguoi = new ConNguoi();
//gọi thuộc tính ngoài class và đồng thười gán giá trị mới cho thuộc tính
$connguoi->name = 'Vũ Thanh Tài';
//gọi lại thuộc tính để xem thay đổi
echo $connguoi->name;
//gọi phương thức
echo "</br>";
echo $connguoi->noi('112');