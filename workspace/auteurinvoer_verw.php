<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <?php
    // verbindingsgegevens database
    $host = "localhost";
    $user = "jolicoeur";
    $pass = "";
    $db = "bibliotheek";
    $port = 3306;

    $connection = mysqli_connect($host, $user, $pass, $db, $port);

    
    $naam = $_POST["VOORNAAM"];
    $autnr = $_POST["AUTEURNR"];
    $voorletter = $_POST["VOORLETTERS"];
    $tussenvoegsel = $_POST["TUSSENVOEGSELS"];
    $achternaam = $_POST["ACHTERNAAM"];
    $geboren = $_POST["GEB_JAAR"];
    $dood = $_POST["STERF_JAAR"];
    
    
    print("$naam,$achternaam,$autnr,$tussenvoegsels,$voorletter,$geboren,$dood");
    
    // Invoegen van de gegevens in de tabel boeken
    //$sql = "VOORNAAM:$naam<br><br>AUTEURNR:$autnr<br><br> VOORLETTERS:$voorletter<br><br> TUSSENVOEGSELS:$tussenvoegsel<br><br>GEB_JAAR:$geboren<br><br> ACHTERNAAM:$achternaam,<br><br> STERF_JAAR:$dood)<br><br>VALUES ($naam, $autnr, '$voorletter', $tussenvoegsel, '$achternaam', $geboren, '$dood')<br><br>";
    $sql2 = "insert into test(naam,achternaam,autheur_nummer,tussenvoegsels,voorletter,geboren,dood) VALUES('$naam','$achternaam','$autnr','$tussenvoegsel','$voorletter','$geboren','$dood')"; 
    $resultaat = mysqli_query($connection, $sql2);

    //print ($sql);
    // Verbreken van de verbinding met de database
    $verbreken = mysqli_close($connection);

    // Bevestigen dat de gegevens zijn opgeslagen
    //print ("De data van $naam is opgeslagen")
    ?>
</body>
</html>