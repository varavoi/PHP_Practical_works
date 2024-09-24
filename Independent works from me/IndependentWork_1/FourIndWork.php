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
 . Реализовать конвертер единиц памяти: есть 4 переменные: input_number, from, to. В переменные from
и to записывается, с какой на какую единицу происходит конвертация.
Пример вывода:
 */
$unit_arr= [
    "В"=>["КВ"=>0.001,"МВ"=>0.000001],
    "гр"=>["кг"=>0.001,"т"=>0.000001],
    "мм" =>["см"=>0.1,"дм"=>0.01,"м"=>0.001,"км"=>0.000001]
];
function konverter($value,$from, $to){
    global $unit_arr;
    $res;
    if(array_key_exists($from, $unit_arr)){
        if(array_key_exists($to, $unit_arr[$from])){
            $res = $value*$unit_arr[$from][$to];
        }
    }
    else if(!array_key_exists($from, $unit_arr)){
        if(array_key_exists($to, $unit_arr)){
            if(array_key_exists($from, $unit_arr[$to])){
                $res = $value/$unit_arr[$to][$from];
            }
        }
    }
    return $res;
}
$val=5;
$from = "КВ";
$to = "В";
konverter($val,$from,$to);
echo $val.$from." = ".konverter($val,$from,$to).$to;
    ?>
</body>
</html>