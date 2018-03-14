<!DOCTYPE html>
<html>
    
<head>
    
    
</head>


<body>
 
<p>
<?php

$getal1 = $_POST['getal1'];
$getal2 = $_POST['getal2'];

$operatue = $_POST['operatie'];

$plus = $_POST['plus'];

if ($operatue == "+") {
	$som = $getal1 + $getal2;
	echo "$getal1 + $getal2 = $som ";
    
} elseif ($operatue == "-") {
	$som2 = $getal1 - $getal2;
	echo "$getal1 - $getal2 = $som2";

} elseif ($operatue == "*") {
    	$som3 = $getal1 * $getal2;
    	echo "$getal1 * $getal2 = $som3";
    
} elseif ($operatue == "/") {
  	$som4 = $getal1 / $getal2;
  	echo "$getal1 / $getal2 = $som4";
    
} else {
	echo "Je hebt een veld niet ingevult";
}









?>
</p>


</body>
    
    
    
</html>



