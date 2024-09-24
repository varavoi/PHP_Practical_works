<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*Задание 1.
    У вас есть переменные 
    $a = "Hello";
    $b = array("red", "green", "blue");
    $c = true;
    $d = "32";
    $a = 32;
    Проверьте их на тип:
    1. Числовой (numeric)
    2. Строковый
    3. Целое число
    4. Не целое чиcло*/

    $a = "Hello";
    $b = array("red", "green", "blue");
    $l = array(1, 'red', 45);
    $c = true;
    $d = "32";
    $e = 32;


function check_type($var){
    $schet=0;
    $arrInt_indexes=[];
    $arrFloat_indexes=[];
    $arrString_indexes=[];
    $arrBool_indexes=[];
    $temp_var;
    if(!is_array($var)){
        $str;
        if(is_numeric($var) && !is_bool($var)){
            if(is_int($var)){
                echo "<br>Переменная '$var' является целочисловым типом (integer)<br>"; 
            }
            else if(is_float($var)){
                echo "<br>Переменная '$var' является числовым типом с плавающей запятой (float)<br>"; 
            }
            else{
                echo "<br>Переменная '$var' является числовым типом (numeric)<br>";
            }
        }  
        else if(is_string($var) && !is_bool($var)){
            echo "<br>Переменная '$var' является строковым типом(string)<br>";
        }    
        else if(is_bool($var)){
            $str = ($var==true)?"true":"false";
            echo "<br>Переменная '$str' является булевым типом(boolean)<br>";
        }
        
    }
    else if(is_array($var)){
        $temp_var = "";
        $temp_var .= "[";
        for($i=0;$i<count($var);$i++){
            if(is_bool($var[$i])){
                if($var[$i]==true){
                    $temp_var .='true'.", ";
                }
                else if($var[$i]==false){
                    $temp_var .='false'.", ";
                }
            }
            $temp_var .=($var[$i]).", ";
        }
        $temp_var .= "]";
        $temp_var =str_replace(', ]',']',$temp_var);
        $temp_var =str_replace(', ]',']',$temp_var);
        $count_int=0;
        $count_float=0;
        $count_string=0;
        $count_bool=0;
        for($i=0;$i<count($var);$i++){
            if(is_int($var[$i])){
                $count_int++;
                array_push($arrInt_indexes,$i);
            }
            else if(is_float($var[$i])){
                $count_float++;
                array_push($arrFloat_indexes,$i);
            }
            else if(is_string($var[$i])){
                $count_string++;
                array_push($arrString_indexes,$i);
            }
            else if(is_bool($var[$i])){
                $count_bool++;
                array_push($arrBool_indexes,$i);
            }
        }
        if($count_int>0 || $count_float>0 || $count_string>0 || $count_bool>0){
            if($count_int==count($var)){
                echo "<br>Все элементы массива $temp_var - целочисленного типа(int)<br>";
            }
            else if($count_float==count($var)){
                echo "<br>Все элементы массива $temp_var - числового типа с плавающей запятой(float)<br>";
            }
            else if($count_string==count($var)){
                echo "<br>Все элементы массива $temp_var - строкового типа(string)<br>";
            }
            else if($count_bool==count($var)){
                echo "<br>Все элементы массива $temp_var - булевого типа(boolean)<br>";
            }
            else if($count_float!=count($var) || $count_string!=count($var) ||$count_string!=count($var)||$count_bool!=count($var)){
                echo "<br>Массив $temp_var состоит из".(($count_int>0)?(" $count_int".($count_int==1?('-го элемента типа int,'):('-х элементов типа int,'))):'').(($count_float>0)?(" $count_float".($count_float==1?'-го элемента типа float,':'-х элементов типа float,')):'').(($count_string>0)?(" $count_string".($count_string==1?'-го элемента типа string,':'-х элементов типа string,')):'').(($count_bool>0)?(" $count_bool".($count_bool==1?'-го элемента типа boolean,':'-х элементов типа boolean,')):'')."<br> Точнее: <p style='font-weight:600;font-style:italic;'>";
                if($count_int>0){
                    
                    echo "типа int - ";
                    for($i=0;$i<count($arrInt_indexes);$i++){
                        echo $var[$arrInt_indexes[$i]].", ";
                    }
                    
                    echo "<br>";
                }
                if($count_float>0){
                    echo "типа float - ";
                    for($i=0;$i<count($arrFloat_indexes);$i++){
                        echo $var[$arrFloat_indexes[$i]].", ";
                    }
                    echo "<br>";
                }
                if($count_string>0){
                    echo "типа string - ";
                    for($i=0;$i<count($arrString_indexes);$i++){
                        echo $var[$arrString_indexes[$i]].", ";
                    }
                    echo "<br>";
                }
                if($count_bool>0){
                    echo "типа bool - ";
                    for($i=0;$i<count($arrBool_indexes);$i++){
                        if($var[$arrBool_indexes[$i]]==true){
                            echo 'true'.", ";
                        }
                        else if($var[$arrBool_indexes[$i]]==false){
                            echo 'false'.", ";
                        }
                        
                    }
                    echo "<br>";
                }
            echo "</p>";
            }
        }
        
        
        else {
            echo "<br>Массив ['$temp_var'] неопределенного типа<br>";
        }
    }
}

$a = "Hello";
    $b = array("red", "green", "blue");
    $l = array(1, 'red', 45.2, 44, true,'door',false,33);
    $c = true;
    $d = "32";
    $e = 32;
    $v = 7.6;

check_type($a);
echo "<br>";
check_type($b);
echo "<br>";
check_type($l);
echo "<br>";
check_type($c);
echo "<br>";
check_type($d);
echo "<br>";
check_type($e);
echo "<br>";
check_type($v);
echo "<br>";

    ?>
</body>
</html>