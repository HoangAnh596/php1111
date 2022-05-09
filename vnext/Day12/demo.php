<?php
class Fruit {
  public $name;
  protected $color;
}

$mango = new Fruit();
$mango->name = 'Mango'; // OK
echo "<pre>";
print_r($mango);
echo "</pre>";
// $mango->color = 'Yellow'; // ERROR

//Khai báo hàm __autoload
function __autoload($className)
{
    echo 'Bạn vừa khởi tạo class: ' . $className;
}

//Khai báo class ConNguoi
class ConNguoi
{
    //Khai báo hàm khởi tạo
    public function __construct()
    {
        echo 'Class ConNguoi';
    }
}

//Khởi tạo class ConNguoi
$connguoi = new ConNguoi();
//Kết Quả: Class ConNguoi
echo "</br><span style='color:red'><b>self & this</b></span></br>";
class Animal {

  public function whichClass() {
      echo "I am an Animal!";
  }

  public function sayClassName() {
      $this->whichClass();
  }
}

class Tiger extends Animal {

  public function whichClass() {
      echo "I am a Tiger!";
  }

}

$tigerObj = new Tiger();
$tigerObj->sayClassName();
?>