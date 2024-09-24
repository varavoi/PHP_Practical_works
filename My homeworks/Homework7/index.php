<?php
class Rectangle{
    private $length, $width;
    function __construct($length, $width){
        $this->length=$length;
        $this->width=$width;
        echo "<br><p style='font-weight:600; color:red;'>Создан прямоугольник сторонами ".$this->length."х".$this->width."</p><br>";
    }
    function getSquare(){
        echo "<br>Площадь прямоугольника сторонами ".$this->length."х".$this->width." = ".($this->length*$this->width)."<br>";
    }
    function getPerim(){
        echo "<br>Периметр прямоугольника сторонами ".$this->length."х".$this->width." = ".(($this->length*2)+($this->width*2))."<br>";
    }
    function getDiagonal(){
        echo "<br>Длина диагонали прямоугольника сторонами ".$this->length."х".$this->width." = ".round((($this->length**2)+($this->width**2))**0.5,2)."<br>";
    }
    function __destruct(){
        echo "<br><p style='font-weight:600; color:red;'>Прямоугольник сторонами ".$this->length."х".$this->width." разрушен</p><br>";
    }
}

$rect = new Rectangle(4,2);
$rect->getSquare();
$rect->getPerim();
$rect->getDiagonal();


?>