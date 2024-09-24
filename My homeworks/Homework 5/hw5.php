<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $users ='usersInfo.txt';
    if(!isset($_POST['showButt'])){
    ?>
    <form action="hw5.php" method='post'>
        <label for="username">Имя пользователя</label>
        <input type="text" name = "username">
        <label for="usersalary">Зарплата пользователя</label>
        <input type="text" name = "usersalary">
        <input type="submit" name="recordButt" value="Записать в файл">
        <input type="submit" name="showButt" value="Показать данные пользователей">
    </form>
    <?php
    }
   
    else if(isset($_POST['recordButt'])){
        echo "123";
        $name = trim(htmlspecialchars($_POST['username']));
        $salary =trim(htmlspecialchars($_POST['usersalary']));
        $file=fopen($users,'a+');
        $userdata= 'Имя пользователя: '.$name.'; Зарплата пользователя: '.$salary.":\r\n";
        fwrite($file,$userdata);
        fclose($file);
    }
    else if(isset($_POST['showButt'])){
        echo "123";
        $strData='';
        $file = fopen($users,'a+');
        if(!feof($file)){
            $userdata= fgets($file);
            $strData .="<p>".$userdata."</p><br>";
        }
        fclose($file);
       echo "<div style='display:flex;flex-direction:column;'>".$strData."<button>Закрыть</button></div>"; 
    }
    ?>
</body>
</html>