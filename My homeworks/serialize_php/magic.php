<?php

class Point
{
    private $x;
    private $y;
    function __construct($x, $y)
    {
        $this->x=$x;
        $this->y=$y;
    }
    function Show()
    {
        echo 'Vertex: ('.$this->x.','.$this->y.') <br/>';
    }

     // Метод __toString() разрешает классу выбирать,
    // как класс будет реагировать, когда с ним обращаются
    // как со строкой. Например, класс решает, что выведет выражение echo

    function __toString()
    {
        return "(".$this->x.":".$this->y.")";
    }
    function __sleep(){
        return array("x", "y");
    }
}


$p=new Point (100,200);
$p->Show();
echo $p;

$str = serialize($p);
echo "<br>";
echo $str;

?>