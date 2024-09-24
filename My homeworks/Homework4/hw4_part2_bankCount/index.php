<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="Homework4/hw4_part2_bankCount/hw4_style.css">
</head>
<body>
    <?php
    session_start();
    if(isset($_GET['exitButt']) && isset($_SESSION['person'])){
        session_destroy();?>
        <form action="person.php" method="GET" class="form1">
        <label for="logId">Логин</label>
        <input type="text" id="logId" name = "login">
        <label for="passId">Пароль</label>
        <input type="password" id="passId" name = "password">
        <input type="submit" name="subButt" value="Войти">
    </form>
    <?php
    }
    
     if(!isset($_SESSION['person'])){
    ?>
    <form action="person.php" method="GET" class="form1">
        <label for="logId">Логин</label>
        <input type="text" id="logId" name = "login">
        <label for="passId">Пароль</label>
        <input type="password" id="passId" name = "password">
        <input type="submit" name="subButt" value="Войти">
    </form>
    <?php
  }
    ?>
</body>
</html>