<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $res=false;
        $count=0;
        $name = $surname=$pathronic='';
        $email = '';
        $emailErr='';
        $nameErr=$surnameErr=$pathronicErr='';
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            if(empty($_GET['name'])){
                $nameErr = "Введите имя";
                ++$count;
            }
            else{
                $name = test_input($_GET['name']);
                $_SESSION["name"] = $name;
                if(!preg_match("/^[\p{L} -]+$/u",$name)){
                    $nameErr = "Допускаются только латинские и кириллические буквы, пробел и тире";
                    ++$count;
                }
           
            }
            if(empty($_GET['surname'])){
                $surnameErr = "Введите фамилию";
                ++$count;
            }
            else{
                $surname = test_input($_GET['surname']);
                $_SESSION["surname"] = $surname;
                if(!preg_match("/^[\p{L} -]+$/u",$surname)){
                    $surnameErr = "Допускаются только латинские и кирииллические буквы, пробел и тире";
                    ++$count;
                }
            }

            if(empty($_GET['pathronic'])){
                $pathronicErr = "Введите отчество";
                ++$count;
            }
            else{
                $pathronic = test_input($_GET['pathronic']);
                $_SESSION["pathronic"] = $pathronic;
                if(!preg_match("/^[\p{L} -]+$/u",$pathronic)){
                    $pathronicErr = "Допускаются только латинские и кирииллические буквы, пробел и тире";
                    ++$count;
                }
            }

            if(empty($_GET['email'])){
                $emailErr = "Введите email";
                ++$count;
            }
            else{
                $email = test_input($_GET['email']);
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $emailErr = "Неверная почта";
                    ++$count;
                }
            }
        }
        if($count==0){
            $res=true;
        }
        else if($count>0){
            $res=false;
        }
        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
    <?php if(!$res){?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
        <div class="form-group">
            <label for="name" class="labelSt">Имя</label>
            <input type="text" name="name" id="name" value="<?php echo $name;?>" class="inputSt" >
            <span class="error"><?php echo $nameErr?></span>
        </div>
        <div class="form-group">
            <label for="surname" class="labelSt">Фамилия</label>
            <input type="text" name="surname" id="surname" value="<?php echo $surname;?>" class="inputSt" >
            <span class="error"><?php echo $surnameErr?></span>
        </div>
        <div class="form-group">
            <label for="pathronic" class="labelSt">Отчество</label>
            <input type="text" name="pathronic" id="pathronic" value="<?php echo $pathronic;?>" class="inputSt" >
            <span class="error"><?php echo $pathronicErr?></span>
        </div>
        
        <div class="form-group">
            <label for="email" class="labelSt">E-mail</label>
            <input type="email" name="email" id="email" value="<?php echo $email;?>" class="inputSt" >
            <span class="error"><?php echo $emailErr?></span>
        </div>
        <div class="form-group">
            <label for="comment" class="labelSt">Обращение</label>
           <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
        </div>
        <input type="submit" name="submit" value="Отправить">
    </form>
</body>
</html>
<?php
}
else if($res){


   
    class Handler{
        private $arr=[];
         function __construct($name="",$surname="",$pathronic="",$email="",$comment=""){
            $this->arr = [
                'name'=>$name,
                'surname'=>$surname,
                'pathronic'=>$pathronic,
                'email'=>$email,
                'comment'=>$comment
            ];
         }
         public function to_JSON_encode(){
                $array=$this->arr;
            $json_file = json_encode($array);
            return $json_file;
         }
         public function to_JSON_recordFile(){
            $file="data.txt";
            $json=$this->to_JSON_encode();
            $fh = fopen($file,'w+');
            fwrite($fh,$json);
            fclose($fh);
            return $file;
         }
         public function to_JSON_decodeFile(){
            $file = $this->to_JSON_recordFile();
            $text = "";
            $filename = fopen($file,'r');
            while (!feof($filename)) {
                $line=fgetc($filename);
                $text .=$line;
            }
           
            $text =json_decode($text,true);
            
            $arr3=$text;
            
            fclose($filename);
            return $arr3;
         }
         public function to_make_table(){
            $arr2 = $this->to_JSON_decodeFile();
            
            echo "<table>";
             echo   "<tr><th>Имя</th><th>Фамилия</th><th>Отчество</th><th>E-mail</th><th>Запрос от пользователя</th>";
              echo  "<tr><td>". $arr2['name']."</td><td>". $arr2['surname']."</td><td>". $arr2['pathronic']."</td><td>". $arr2['email']."</td><td>". $arr2['comment']."</td>";
            echo "</table>";
            
         }

    }

    $handler = new Handler($_GET['name'],$_GET['surname'], $_GET['pathronic'], $_GET['email'], $_GET['comment'] );
    $handler->to_JSON_encode();
    $handler->to_JSON_recordFile();
   $handler->to_JSON_decodeFile();
    $handler->to_make_table();
    
   
}
?>