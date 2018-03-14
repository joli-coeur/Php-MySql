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

    // Ophalen van gegevens uit het formulier
    $boekid = $_POST["boekid"];
    $autnr = $_POST["auteurnr"];
    $titel = $_POST["boektitel"];
    $genre = $_POST["genre"];
    $aantal = $_POST["aantal"];
    $rubriek = $_POST["rubriek"];
    $pubjaar = $_POST["pubjaar"];

    // Invoegen van de gegevens in de tabel boeken
    $sql = "INSERT INTO boeken(BOEKNR, AUTNR, TITEL, PUB_JAAR, AANTALPAGS, GENRE, RUBRIEK) VALUES ($boekid, $autnr, '$titel', $pubjaar, '$genre', $aantal, '$rubriek')";
    $resultaat = mysqli_query($connection, $sql);

    // Bevestigen dat de gegevens zijn opgeslagen
    print ("Het boek $titel is opgeslagen");
    
    print ($sql);
    // Verbreken van de verbinding met de database
    $verbreken = mysqli_close($connection);
    ?>
</body>
</html>