<?php

/*
Создать массив из 10 элементов. Посчитать количество повторов каждого числа в массиве (цвет цифр, 
20рх. Число в каждой строке выделять жирным
*/
$arr = [4,5,70,4,-6,10,-6,8,5,7];
$str='';
$arr2=[];
for($i=0;$i<count($arr);$i++){
    if(!array_key_exists($arr[$i],$arr2)){
        $arr2[$arr[$i]]=1;
    }
    else{
        $arr2[$arr[$i]] +=1;
    }
}
foreach($arr2 as $key=>$value){
    if($value==1){
        $str .="<p style='color:red;font-size:20px'>".$key."</p>"; 
    }
    else{
        $str .="<p style='color:blue;font-size:20px'>".$key."</p>"; 
    }
}

//$str .="<p style='color:blue;font-size:20px'>".$arr[$i]."</p>";
echo $str;
?>