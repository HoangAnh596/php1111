<?php
require_once 'Shape.php';

class Circle extends Shape
{

    const SHAPE_TYPE = 3;
    protected $radius;
    public function __construct($radius){
        $this->id = uniqid();
        $this->radius = $radius;
    }
    public static function getTypeDescription(){
        return "Type: " .self::SHAPE_TYPE;
    }
    public function area()
    {
        return  "Diện tích : ".( pow($this->radius, 2 ) * pi());
    }

    public function getFullDescription() {
        return "Circle<#".$this->getId().">: ". $this->getName() ." - " . $this->radius;
    }
}

$circle = new Circle( 6 );

$circle->setName("Hình tròn");

echo Circle::getTypeDescription() ."\n\n";
echo  $circle->area()  ."\n\n";

echo $circle->getFullDescription();


?>