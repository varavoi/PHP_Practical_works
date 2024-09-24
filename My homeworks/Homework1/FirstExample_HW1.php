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
У вас есть 2 переменных $a и $b
Есть переменная $n, которая отвечает за математическую операцию
С помощью мэтч выбрать математическую операцию над $a и $b
(сложение, вычитание, умножение, деление)
    */
    $a=3;
    $b=10; 
    $n="/";
    $operation = match($n){
        "+"=>$a+$b,
        "-"=>$a-$b,
        "*"=>$a*$b,
        "/"=>$a/$b,
    };
    echo "$a $n $b = ".$operation;
    
    ?>
</body>
</html>