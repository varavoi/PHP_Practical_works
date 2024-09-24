<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    $persons_data = [["login"=>"var1993","password"=>"1234v","name"=>"Вардан Авоян","amount"=>78000],
    ["login"=>"nastya78","password"=>"7878n","name"=>"Анастасия Трофимова","amount"=>93000],
    ["login"=>"murad.jhon","password"=>"m555","name"=>"Мурад Рахметов","amount"=>456700],
    ["login"=>"oleg","password"=>"12345","name"=>"Олег Иванов","amount"=>65000]
];
    
if(isset($_GET['subButt'])){
    for($i=0;$i<count($persons_data);$i++){
            if($_GET['login']==$persons_data[$i]['login'] && $_GET['password']==$persons_data[$i]['password']){
                $_SESSION['person'] =$persons_data[$i];
            }
    }
    if(isset($_SESSION['person'])){
        echo "<p style='font-size=20px;font-weight:600;font-style:italic;color:red;'>";        
        echo "Имя пользователя: ".$_SESSION['person']['name']."<br>";
        echo "Cумма на счете клиента: ".$_SESSION['person']['amount']."рублей<br>";
        echo "</p>";?>
        <form action="transaction.php" method="GET">
            <input type="submit" name="tranferButt" value="Перевод денег">
        </form>
        <form action="index.php" method="GET">
            <input type="submit" name="exitButt" value="Выход">
        </form>
        <?php
    }
    else if(!isset($_SESSION['person'])){
        ?>
    <form action="index.php" method="GET">
        <p>Ошибка<br> Неправильно введены логин или пароль</p>
        <input type="submit" name="returnButt" value="Назад">
    </form>

        <?php
    }
}
if(isset($_GET['sendButt'])){
    echo "<p style='font-size=20px;font-weight:600;font-style:italic;color:red;'>";
        
            $_SESSION['person']['toWhomSend'] = $_GET['toWhomSend'];
            $_SESSION['person']['sumToSend'] = $_GET['sumToSend'];
            $remain = $_SESSION['person']['amount'] - $_SESSION['person']['sumToSend'];
            if($remain>=0){
                $_SESSION['person']['amount'] = $remain;
                echo "Пользователю ".$_SESSION['person']['toWhomSend']." было переведено ".$_SESSION['person']['sumToSend']."рублей<br>";
            }
            else if($remain<0){
                echo "У Вас на балансе недостаточно средств!<br>";
            }
        
        echo "Имя пользователя: ".$_SESSION['person']['name']."<br>";
        echo "Cумма на счете клиента: ".$_SESSION['person']['amount']."рублей<br>";
        echo "</p>";?>
        <form action="transaction.php" method="GET">
            <input type="submit" name="tranferButt" value="Перевод денег">
        </form>
        <form action="index.php" method="GET">
            <input type="submit" name="exitButt" value="Выход">
        </form>
        <?php
}

    ?>
</body>
</html>