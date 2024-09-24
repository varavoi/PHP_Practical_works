<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   /* 1. Вывести на страницу «Hello World» (echo и print).
    2. ESCAPE последовательности: вывести «Hello World»
    в различных вариациях:
    a) «Hello» в первой строке, «World» во второй;
    b) «Hello» в первой строке, «World» во второй и с табуляцией;
    c) Вывести на страницу строку: «Hello World. \”It’s my
    page!”\»;
    d)Вывести на страницу строку: <h1>Hello</h1> <h3>
    World</h3> <b>I</b> <i>am</i> <u>a new PHP
    developer</u>;
    e) Вывести на страницу строку: <script>alert(‘Hello
    World’); </script>.
3.Вывести значение, противоположное введенному
input "5", output "-5").
4. Создать две переменные и вывести результат возможныхматематических операциймежду ними (+,-, *,/,%).
5. Поменять два числа местами.
6. Создатьдвепеременные:username/password,вывестина
страницу два input-тега, типа text,где placeholder
1
название переменной, а text
в переменную.
Пример вывода:

Создать страницу,где описатьпеременные:font_family,
font_size, font_style
это value соответствующего стиля. вывести тег <p>
со стилями, описанными в переменных.
*/

    echo "Hello<br>World";
    echo "<br><br>";
    echo "Hello<br>\tWorld";
    echo "<br>«Hello World. \”It’s my page!”\»";
    echo "<h1>Hello</h1> <h3>World</h3> <b>I</b> <i>am</i> <u>a new PHP
    developer</u>";
    echo "<br><br>";
    echo '<script>alert("Hello, World!");</script>';
    $num =5;
    function change(&$num){
        $num *=-1;
    }
echo "<br>$num";
     function math_operations($a,$b,$op){
        $result = match ($op) {
             "+"=>  "$a + $b = ".$a+$b,
             "-"=>  "$a - $b = ".$a-$b,
             "*"=>  "$a * $b = ".$a*$b,
             "/"=>  "$a / $b = ".$a/$b,
             "%"=>  "$a % $b = ".$a%$b,
        };
        return $result;
     }
    echo math_operations(5,2,"+");
    echo "<br><br>";
    function changePlace($a,$b){
        echo "a = $a; b = $b;";
        echo "<br>После замены местами<br>";
        $temp;
        $temp=$a;$a=$b;$b=$temp;
        echo "a = $a; b = $b";
    }
    changePlace(2,44);

$username = "Vasya";
$password = "12345";
$pass_placeholder ="";
for($i=0;$i<strlen($password);$i++){
    $pass_placeholder .="*";
}
echo "<br><br>";
echo "Username <input type='text' placeholder = '$username'>";
echo "\t\t\t\tPassword <input type='password' placeholder = '$pass_placeholder'>";

$font_family="Arial";
$font_size="20px";
$font_style = "bold";

echo "<p style = '
font-family:$font_family;
font-size:$font_size;
font-style:$font_style;'>Hello</p>";
    ?>;
    </body>
</html>