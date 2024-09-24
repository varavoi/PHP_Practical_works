<?php
/*
Создать массив, который будет содержать название 
изображения, ссылки и альтернативный текст на следующие ресурсы: Youtube, Facebook, Google, Gmail 
<div>, который будет показывать изображение и по клику на изображение будет перенаправлять на соответствующий сайт.
Пример вывода:
*/

$str='';
$str .="<div>";
$arr = [
    ["href"=>"https://www.youtube.com/","alt"=>"Youtube","src"=>"https://www.flaticon.com/free-icon/youtube_3670147?term=youtube&page=1&position=1&origin=tag&related_id=3670147"],
    ["href"=>"https://www.wikipedia.org/","alt"=>"Wiki","src"=>"https://www.flaticon.com/free-icon/social_49360?term=wikipedia&page=1&position=3&origin=search&related_id=49360"],
    ["href"=>"https://www.google.com/","alt"=>"Google","src"=>"https://www.flaticon.com/free-icon/google_300221?term=google&page=1&position=1&origin=search&related_id=300221"],
    ["href"=>"https://www.google.com/intl/ru/gmail/about/","alt"=>"GMAIL","src"=>"https://www.flaticon.com/free-icon/gmail_5968534?term=gmail&page=1&position=4&origin=search&related_id=5968534"]
];
foreach($arr as $info=>$props){
    $str .="<div style='float:left;'>"."<a href='".$props["href"]."'><img src='".$props["src"]."' alt='".$props["alt"]."'/></a></div>";
}

$str .="</div>";
echo $str;
?>