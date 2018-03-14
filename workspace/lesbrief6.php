<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        
    
        
        
        <?php
    // variabelen met gegevens om te verbinden
    $host = "localhost";
    $user = "jolicoeur";
    $pass = "";     
    $db = "bibliotheek";
    $port = 3306;       

    $connection = mysqli_connect($host, $user, $pass, $db, $port);

    $query = "select * from auteurs";
    $result = mysqli_query($connection, $query);

   $geg = $row['VOORNAAM'];
   $sterf = $row['STERF_JAAR'];
    while ($row = mysqli_fetch_assoc($result)) {
        $geg = $row['VOORNAAM'];
        $sterf = $row['STERF_JAAR'];
        print("<table border='1px'><tr><td>$geg</td><td>$sterf</td></tr></table>");
        //print ($row['VOORNAAM']);
        //print("<br>");
        //print (" Sterf_jaar:");
        //print ($row['STERF_JAAR']);
        //print ("<br>");
    }
    mysqli_close($connection);
?>


    </body>
</html>