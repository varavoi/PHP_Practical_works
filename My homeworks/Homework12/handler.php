<?php
//echo $_POST["name"];
$name = $_POST['name'];
$names = array("mary", "maria", "marcello", "mark", "max", "mike");
$name = strtolower($name);
$response = "";

foreach($names as $n)
{
 if(substr($n,0,strlen($name)) === $name)
 {
    $response .= $n."<br/>";
 }
}
echo $response; 

?>