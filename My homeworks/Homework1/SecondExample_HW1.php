
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body style="margin:0 auto;
            display:flex;
            justify-content:center;
            height:100vh;
            align-items:center;">
    <?php
     /*
     Вывести  на экран календарь на текущий месяц:
     */
//$monthElem_value = 1;
$monthElem_value =NULL;
$monthElem_style = "border:1px solid black;
                    padding:10px;
                    width:300px;
                    display:flex;
                    flex-direction:column;
                    align-item:center;
                    justify-content:center;
                    align-self:center;";
$weekElem_style = "display:flex;
                    flex-direction:row;
                    justify-content:left;
                    ";
$dayElem_style = "font-size:20px;
            color:black;
            padding:10px;
            width:20px;
            margin-block-start: 0em;
            margin-block-end: 0em;
            border:1px solid black;
            text-align:center;";    
$dayOffElem_style = "font-size:20px;
            color:red;
            padding:10px;
            width:20px;
            margin-block-start: 0em;
            margin-block-end: 0em;
            border:1px solid black;
            text-align:center;"; 
$dayCurrentElem_style = "font-size:20px;
            color:yellow;
            padding:10px;
            width:20px;
            margin-block-start: 0em;
            margin-block-end: 0em;
            border:1px solid blue;
            background-color:skyblue;
            text-align:center;";                  
$weekElem_value =NULL;
$dayElem_value=1;
$dayElem = NULL;

$monthElem=NULL;

function build_Elem($tag,&$elem,$style,$value){
    $elem= "<".$tag." style = '".$style."'>".$value."</".$tag.">";
}

$callendArr_days =[];
$f=1;
for($i=0;$i<=4;$i++){
    for($j=0;$j<7;$j++){
        $callendArr_days[$i][$j] = $f." ";
        if($f<30){
            $f++;
           }
           else if($f>=30){
            $f="";
            break;
           }
    }
}


for($i=0;$i<count($callendArr_days);$i++){
    for($j=0;$j<count($callendArr_days[$i]);$j++){
        $dayElem_value = $callendArr_days[$i][$j];
        if(($j==5||$j==6||$dayElem_value==1||$dayElem_value==9)&&$dayElem_value!=date("d")){
            build_Elem("p",$dayElem,$dayOffElem_style,$dayElem_value);
        }
        else if($dayElem_value==date("d")){
            build_Elem("p",$dayElem,$dayCurrentElem_style,$dayElem_value);
        }
        else{
            build_Elem("p",$dayElem,$dayElem_style,$dayElem_value);
        }
       
        $weekElem_value .=$dayElem;
    }
    build_Elem("div",$weekElem,$weekElem_style,$weekElem_value);
    $weekElem_value ='';
    $monthElem_value .= $weekElem;
}
build_Elem("div",$monthElem,$monthElem_style,$monthElem_value);
echo $monthElem;



    ?>
</body>
</html>