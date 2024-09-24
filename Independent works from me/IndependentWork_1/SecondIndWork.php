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
   5. Есть переменная, в которую записана цифра. Цифра это номер заголовка (тег <h1>...<h6>). На выходе
скрипт проверяет, возможно ли построить тег(входит
ли число в диапазон от 1 до 6) и, если возможно, то
он его строит, если нет, выводит на экран сообщение
об ошибке
   */
function check_titleNumb($numb){
    if($numb<1 || $numb>6){
        echo "Number = $numb and HTML doesn't support h$numb header";
    }
    else{
        echo "Number = $numb and can make h$numb header";
    }
}
check_titleNumb(2);


    ?>
</body>
</html>