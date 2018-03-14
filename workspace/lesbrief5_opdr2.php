<!DOCTYPE HTML>
<html>
<head>
<title>De weekdagen</title>
</head>

<body>
<?php

$weekdagen = array("Maandag","Dinsdag","Woensdag","Donderdag","Vrijdag","Zaterdag","Zondag");
print("In de array zitten de volgende dagen in een week in volgorde:<br>");


for($i = 0; $i < count($weekdagen); $i++) 
    print ( "<ol>$weekdagen[$i]</ol>" );

?>
</body>
</html>
