<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form action="Hello.php" method = "GET" class ="form1">
    <label for="name">Имя</label>
    <input type="text" id ="name" name ="username" class="inputArea" require>
    <label for="userpass">Пароль</label>
    <input type="text" id ="userpass" name ="userpass" class="inputArea" require>
    <input type="submit" id = "submitButt" name ="submitButt" value="Войти" class="inputButt">
</form>
<!-- <script type="text/javascript">
    let form1 = document.querySelector(".form1");
    let username = document.querySelector("#name");
    let userpass = document.querySelector("#userpass");
    let submitButt = document.querySelector("#submitButt");

    submitButt.addEventListener("click",function(e){
        e.preventDefault();
        if(username.value.length>0 && userpass.value.length>0){
            form1s.submit();
        }
    })

</script> -->

</body>
</html>