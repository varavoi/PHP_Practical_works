<?php

$jspoint = file_get_contents('jsonpoint.txt');
$obj = json_decode($jspoint);
var_dump($obj);//вывод информации об объекте, которого декодировал

echo "<br>";
echo $obj->x;

?>