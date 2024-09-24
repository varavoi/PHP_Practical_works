<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php  
/*
Создать массив фруктов (состоит из названия, типа, 
цены и количества). Проделать с массивом такие действия:
d) вывести только цитрусовые;
e) посчитать и вывести цену фруктов;
f) посчитать общую цену всех фруктов.
Пример вывода и форматирования:
*/
$fruits =[
    ["Название"=>"Апельсин","Тип"=>"Цитрус","Цена"=>20,"Количество"=>2],
    ["Название"=>"Банан","Тип"=>"Фрукт","Цена"=>10,"Количество"=>6],
    ["Название"=>"Лимон","Тип"=>"Цитрус","Цена"=>10,"Количество"=>7],
    ["Название"=>"Яблоко","Тип"=>"Фрукт","Цена"=>15,"Количество"=>3],
    ["Название"=>"Апельсин","Тип"=>"Фрукт","Цена"=>5,"Количество"=>1]
];

$fruits_count = count($fruits);
$item="<h1 style='magin:2px;'>Все</h1>";
foreach($fruits as $fruit=>$fruit_props){
        $item .="<div style='float:left;padding:10px;background-color:green'>".
        "<h1>".$fruit_props["Название"]."</h1>".
        "<h5>".array_search($fruit_props["Тип"],$fruit_props).": ".$fruit_props["Тип"]."; ".
                array_search($fruit_props["Цена"],$fruit_props).": ".$fruit_props["Цена"]
        ."</h5>".
        "<h3>".array_search($fruit_props["Количество"],$fruit_props).": ".$fruit_props["Количество"]."</h3>".
        "<h6>"."Итоговая цена ".": ".$fruit_props["Количество"] * $fruit_props["Цена"]."</h6>"
    ."</div>";
}
echo $item;
$item='';
$item .="<div style='clear:both;'></div>";
$item .="<h1 style='magin:2px;'>Цитрус</h1>";
foreach($fruits as $fruit=>$fruit_props){
    if($fruit_props["Тип"]=="Цитрус"){
        $item .="<div style='float:left;padding:10px;background-color:orange'>".
        "<h1>".$fruit_props["Название"]."</h1>".
        "<h5>".array_search($fruit_props["Тип"],$fruit_props).": ".$fruit_props["Тип"]."; ".
                array_search($fruit_props["Цена"],$fruit_props).": ".$fruit_props["Цена"]
        ."</h5>".
        "<h3>".array_search($fruit_props["Количество"],$fruit_props).": ".$fruit_props["Количество"]."</h3>".
        "<h6>"."Итоговая цена ".": ".$fruit_props["Количество"] * $fruit_props["Цена"]."</h6>"
    ."</div>";
    }
}
echo $item;
$item='';
$item .="<div style='clear:both;'></div>";
$sum = 0;
foreach($fruits as $fruit=>$fruit_props){
    $sum +=$fruit_props["Количество"] * $fruit_props["Цена"];
}
$item .="<h1 style='magin:2px;'>Итоговая цена всего: ".$sum."</h1>";

echo $item;
?>

</body>
</html>

