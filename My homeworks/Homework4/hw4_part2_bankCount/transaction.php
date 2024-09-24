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
    if(isset($_GET['tranferButt'])&&isset($_SESSION['person'])){
        ?>
        <form action="person.php" method="GET" class="form1">
        <p>Перевод денег</p>
        <label for="toWhomSend">Кому перевести?</label>
        <input type="text" id="toWhomSend" name = "toWhomSend">
        <label for="sumToSend">Сколько перевести?</label>
        <input type="text" id="sumToSend" name = "sumToSend">
        <input type="submit" name="sendButt" value="Перевести">
    </form>
        <?php
    }

    ?>
</body>
</html>