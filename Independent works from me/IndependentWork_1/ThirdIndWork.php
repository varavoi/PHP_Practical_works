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
 Есть две переменные, в которые записаны день и месяц. Программа анализирует эти два числа и говорит
на выходе, какое это время года, название месяца,
первая это или вторая половина месяца.
Пример вывода:
 */
$month_arr = [
    1=>"January",
    2=>"February",
    3=>"Marth",
    4=>"April",
    5=>"May",
    6=>"June",
    7=>"July",
    8=>"August",
    9=>"September",
    10=>"October",
    11=>"November",
    12=>"December"
];
$month_arr_days = [
    "January"=>31,
    "February"=>28,
    "Marth"=>31,
    "April"=>30,
    "May"=>31,
    "June"=>30,
    "July"=>31,
    "August"=>31,
    "September"=>30,
    "October"=>31,
    "November"=>30,
    "December"=>31
];
$month_arr_seasons = [
    "January"=>"winter",
    "February"=>"winter",
    "Marth"=>"spring",
    "April"=>"spring",
    "May"=>"spring",
    "June"=>"summer",
    "July"=>"summer",
    "August"=>"summer",
    "September"=>"autumn",
    "October"=>"autumn",
    "November"=>"autumn",
    "December"=>"winter"
];

function check_Date($day,$month){
    global $month_arr_days, $month_arr,$month_arr_seasons;
    if($day<$month_arr_days[$month_arr[$month]]/2){
        echo "It is ".$month_arr_seasons[$month_arr[$month]].", ".$month_arr[$month].". First half of month ";
    }
    else if($day>$month_arr_days[$month_arr[$month]]/2){
        echo "It is ".$month_arr_seasons[$month_arr[$month]].", ".$month_arr[$month].". Second half of month ";
    }
}
check_Date(16,3);
    ?>
</body>
</html>