<html>
<head>
<title>tekst aangeven met een array</title>
</head>
<body>

<?php
$tekst = array("Hallo", "ik ", "ben", "een" ,"array");
$u = 0;  
while($u < count($tekst)) {
    	print ( "<ol>$tekst[$u]</ol>" );
	$u++;
}
?>

</body>
</html>
