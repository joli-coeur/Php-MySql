<!DOCTYPE HTML>
<html>
<head>
<title>De weekdagen</title>
</head>

<body>
<?php

$weekdagen = array("Maandag","Dinsdag","Woensdag","Donderdag","Vrijdag","Zaterdag","Zondag");
print("In de array zitten de volgende dagen in een week alleen dan tegenovergesteld:<br>");


for($g = 6; $g > 0; $g--) 
    print ( "<ol>$weekdagen[$g]</ol>" );


?>
</body>
</html>