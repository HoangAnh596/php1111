<?php 
require_once 'Shape.php';

class Rectangle extends Shape
{
    const SHAPE_TYPE = 2;
    public static function getTypeDescription(){
        return "Type: " .self::SHAPE_TYPE;
    }

}


$rectangle = new Rectangle( 6, 7);

$rectangle->setName("Hình chữ nhật");

echo Rectangle::getTypeDescription() ."\n\n";
echo  $rectangle->area()  ."\n\n";

echo $rectangle->getFullDescription();
?>