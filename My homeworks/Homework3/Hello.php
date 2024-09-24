<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

if(isset($_GET["submitButt"])){
    if(!isset($_COOKIE["username"])){
        setcookie("username",$_GET["username"],time()+60*60*24,"/","",0);
        echo "<p style='
        font-size:18px;
        width:60%;
        color:red;
        font-weight:600;
        '>Не понимаю причину, почему сразу не срабатывет все, но после обновлении страницы все отображается, так что<br>Обновите cтраницу еще раз</p>";
    }
    else if(isset($_COOKIE["username"])){
        ?>
        
        <form method="post" action="homework4.php" class="form1">
            <h1>Привет <span><?php
                echo $_COOKIE["username"]
            ?></span></h1>
                 <input type="submit" name="submit" value="Выход" class="inputButt">
        </form>
        <?php
        // foreach($GLOBALS as $key=>$item){
        //     echo  "[".$key."] = ".$item;
        // }
        setcookie("username",$_GET["username"],time()-60*60*24,"/","",0);
    }
}

if(isset($_POST['submit'])) {
    //include('homework4.php');
    setcookie("username",$_GET["username"],time()-60*60*24,"/","",0);
}

?>

</body>
</html>
