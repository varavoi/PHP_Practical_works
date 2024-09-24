<!-- register()
Эта функция будет принимать введенные в форму
login, пароль и email. 


Затем будет проверять, чтобы все
три значения были заполнены и чтобы длина их находилась в заданном диапазоне. Еще наша функция будет
выполнять экранирование потенциально опасных символов, чтобы исключить SQL injection.
После валидации функция проверит, уникален ли переданный login,
и если все в порядке, добавит в файл описание нового
пользователя.


В папке pages будет создан файл users.txt, в котором
будут храниться зарегистрированные пользователи.
Каждый пользователь в файле будет записан в отдельной строке в таком формате – имя:пароль:адрес. Пароль
будет храниться в хешированном виде.
10. создать users.txt
 -->

<?php
    $users ='pages/users.txt';
?>
<!---->
<?php
    function register($name,$pass,$pass_conf,$email){
        global $users;
// Функция trim() обрезает пробелы в начале и в конце строки.
    // Функция htmlspecialchars() выполняет экранирование активных символов, чтобы исключить передачу какого-либо скрипта
        $name = trim(htmlspecialchars($name));
        $pass = trim(htmlspecialchars($pass));
        $pass_conf = trim(htmlspecialchars($pass_conf));
        $email = trim(htmlspecialchars($email));

        if($name=='' || $pass=='' || $email==''){
            echo "<h3><span style ='color:red;'>Fill All Required Fields!</span></h3>";
            return false;
        }

        if(strlen($name)<3 || strlen($name)>30  || strlen($pass)<3 || strlen($pass)>30 ){
            echo "<h3><span style ='color:red;'>Values Length Must Be Between 3 and 30!</span></h3>";
            return false;
        }
        if($pass!=$pass_conf){
            echo "<h3><span style ='color:red;'>Passwords don`t match<br>Please try again</span></h3>";
            return false;
        }
        
        $file = fopen($users,'a+');

        while(!feof($file)){
            $line = fgets($file);
            $readname = substr($line,0,strpos($line,':'));
            if($readname==$name){
                echo "  SUCH LOgin nameis already used";
                return false;
            }
        }
    $line2 = $name.':'.md5($pass).':'.$email."\r\n";
    fwrite($file,$line2);
    fclose($file);

        return true;
    }
?>