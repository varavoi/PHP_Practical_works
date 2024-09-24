<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_hw5.css">
</head>
<body>
    <?php
     
    if(!isset($_POST['showButt']) || isset($_POST['extiBtn'])){
    ?>
    <div class = "parent_style">
    <form action="hw5.php" method='POST' class = "recForm_style">
        <label for="username">Имя пользователя</label>
        <input type="text" name = "username">
        <?php
        if(isset($_POST['recordButt']) && $_POST['username'] ==''){
            echo "<p style='color:red;font-size:16px;'>Вы не указали поле имени пользователя</p>";
        }
        ?>
        <label for="usersalary">Зарплата пользователя</label>
        
        <input type="text" name = "usersalary">
        <?php
        if(isset($_POST['recordButt']) && $_POST['usersalary'] ==''){
            echo "<p style='color:red;font-size:16px;'>Вы не указали поле зарплаты пользователя</p>";
        }
        ?>
        <input type="submit" name="recordButt" value="Записать в файл">
    </form>
    <form action="hw5.php" method='POST'>
        <input type="submit" name="showButt" value="Показать данные пользователей">
    </form>
    <form action="hw5.php" method='POST'>
        <input type="submit" name="delButt" value="Удалить/очистить данные пользователей">
    </form>

    </div>
    
    <?php
    }
   
    if(isset($_POST['recordButt'])){
        $users ='salaries.txt';
        $is_inputsNotNull= $_POST['username'] !='' && $_POST['usersalary'] !='';
        $is_inputTrueType = is_string($_POST['username']) && is_numeric($_POST['usersalary']);
       
        if($is_inputsNotNull && $is_inputTrueType){
            $file=fopen($users,'a+');
            $username = trim(htmlspecialchars($_POST['username']));
            $usersalary =trim(htmlspecialchars($_POST['usersalary']));
            $userdata = 'Имя пользователя: '.$username.'; зарплата пользователя: '.$usersalary."руб.;\r\n";
            fwrite($file,$userdata);
            echo "<script>alert('Данные успешно записаны')</script>";
            fclose($file);
        }
       
    }
  if(isset($_POST['showButt'])){
    $users ='salaries.txt';
        $strData='';
        $tmp_Name='';
        $tmp_arr=[];
        $name='';
        $file = fopen($users,'r');
        while(!feof($file)){
          // mb_strpos($userdata,':',0,);
            $userdata = fgets($file);
            $tmp_Name=substr($userdata,strpos($userdata,':')+1,strpos($userdata,';'));
            if(!isset($tmp_arr[$tmp_Name])){
                $tmp_arr[$tmp_Name] = 1;
            }
            else if(isset($tmp_arr[$tmp_Name])){
                $tmp_arr[$tmp_Name] += 1;
            }
            if($tmp_arr[$tmp_Name]==1){
                $name = substr($tmp_Name,0,strpos($tmp_Name,';'));
                $strData .="<p class='textStyle' style='text-align:center;'>".$name."</p>";
                $strData .="<div class='horizLine'></div>";    
            }
            
        }
        fclose($file);
        ?>
        <div class = "parent_style">
        <form action="hw5.php" method='POST'>
            <h1>Список уникальных имен из файла 'salaries.txt'</h1>
            <div class="infoUs_style"><?php 
            $strData = str_replace("<p class='textStyle'></p><br>","",$strData);
            $strData = substr($strData,0,strrpos($strData,"<div class='horizLine'></div>"));
            $strData = substr($strData,0,strrpos($strData,"<div class='horizLine'></div>"));
            if($strData==''){
                echo "<h2 style='color:red;text-align:center;'>Список пуст</h2>";
            }
            else if($strData!=''){
                echo $strData;
            }
            
            ?></div>
            <input type="submit" name = "extiBtn" value = "Выйти">
        </form>
    </div>
        <?php
    }

    if(isset($_POST['delButt'])){
        $users ='salaries.txt';
        $file=fopen($users,'w');
        fwrite($file,'');
        fclose($file);
        echo "<script>alert('Файл salaries.txt успешно очищен')</script>";
    }
    ?>
</body>
</html>