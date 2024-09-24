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
Создать массив со странами и вывести <select>-элемент, который будет включать в себя список стран
Пример вывода:
*/
$cities = [
    ["value"=>"AF","inner"=>"Afganistan"],
    ["value"=>"AL","inner"=>"Albania"],
    ["value"=>"AS","inner"=>"American Samoa"],
    ["value"=>"AM","inner"=>"Armenia"],
    ["value"=>"AT","inner"=>"Austria"],
    ["value"=>"BE","inner"=>"Belgium"],
    ["value"=>"BY","inner"=>"Belarus"],
    ["value"=>"BD","inner"=>"Bangladesh"],
    ["value"=>"RU","inner"=>"Russia"],
];
$str = "<select>";
foreach($cities as $city=>$city_props){
    $str .= "<option value = '".$city_props["value"]."'>".$city_props["inner"]."</option>";
}
$str .="</select>";
echo $str;

?>

</body>
</html>
