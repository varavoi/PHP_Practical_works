let ao = createAjaxObject(); // здесь будет запрос

function createAjaxObject(){
    let ao = null; //изначально запрос пустой
    try{
        //для современных браузеров
        ao = new XMLHttpRequest();
    }
    catch(e){
        try{//для Internet Explorer
            ao = new ActiveXObject("Msxml2.XMLHTTP");
        }
        catch(e){
            try{
                //совсем древние браузеры
                ao = new ActiveXObject("Microsoft.XMLHTTP");
            }
            catch(e){
                //совсем ничего не получилось
                alert("AJAX не поддерживает этот браузер. Обновите Ваш браузер и повторите попытку.");
                return false
            }
        }
    }
    return ao;
}

function Process() {
    // если у нас запрос не создан, или уже получили ответ
    if (ao.readyState == 4 || ao.readyState == 0) {
        let name = document.getElementById("usertext").value;
//открывем запрос асинхронно


       ao.open("POST", "handler.php",true)
       ao.setRequestHeader("Content-type",
        "application/x-www-form-urlencoded");
           
           
        //если поменялась onreadystatechange
        ao.onreadystatechange = getData;
        //отправляем запрос с параметром null
        ao.send("name="+name)
    }


    function getData() {
        if (ao.readyState == 4 && ao.status == 200) {
            let resp = ao.responseText;
            document.getElementById("result").innerHTML = resp;
        }
    }
}