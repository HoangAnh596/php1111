<?php header('Content-type: text/plain');

class Shape{

    const SHAPE_TYPE = 1;
    public $name;
    protected $lenght, $width;
    private $id;

    public function __construct($lenght, $width ){
        $this->id = uniqid();
        $this->lenght = $lenght;
        $this->width = $width;
    }

    public function setName($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
    public function __set($key, $value)
    {
        //kiểm tra xem trong class có tồn tại thuộc tính không
        if (property_exists($this, $key)) {
            //tiến hành gán giá trị
            $this->$key = $value;
        } else {
            die('Không tồn tại thuộc tính');
        }
    }
    public function getId() {
        return $this->id;
    }
    public function area()
    {
        return "Diện tích : ". ($this->lenght * $this->width);
    }

    public static function getTypeDescription(){
        return "Type: " .self::SHAPE_TYPE;
    }

    public function getFullDescription() {
        return "Shape<#".$this->getId().">: ". $this->getName() ." - " .$this->lenght." x " .$this->width;
    }

}


// $shape = new Shape(4, 5);

// $shape->setName("HCN");

// echo Shape::getTypeDescription();

// echo $shape->getFullDescription();

?>