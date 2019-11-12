<?php
try {
    //Connect to database
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";

    $conn = new PDO("mysql:host=$servername;dbname=kraekenradio;port=3306", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Database wijzigen
    if (isset($_POST["submit"])) {
        $numberID = $_POST['numberID'];
        $prognaam = $_POST['prognaam'];
        $datum = $_POST['datum'];
        $begintijd = $_POST['begintijd'];
        $eindtijd = $_POST['eindtijd'];
        $presentator = $_POST['presentator'];
        $zendernaam = $_POST['zendernaam'];

        $conn->query("UPDATE programma SET prognaam = '$prognaam', datum = '$datum', begintijd = '$begintijd', eindtijd = '$eindtijd', presentator = '$presentator', zendernaam = '$zendernaam' WHERE idprogramma = '$numberID'");
    }

    //Database gegevens verwijderen
    if (isset($_POST["verwijder"])) {
        $numberID = $_POST['numberID'];

        $conn->query("DELETE FROM programma WHERE idprogramma = '$numberID'");
    }

    //Database programma toevoegen
    if (isset($_POST["toevoegen"])) {
        $numberID = $_POST['numberID'];
        $prognaam = $_POST['progNaamAdd'];
        $datum = $_POST['progDateAdd'];
        $begintijd = $_POST['progBeginTijdAdd'];
        $eindtijd = $_POST['progEindTijdAdd'];
        $presentator = $_POST['progPresentatorAdd'];
        $zendernaam = $_POST['progZendernaamAdd'];

        $conn->query("INSERT INTO programma (idprogramma, prognaam, datum, begintijd, eindtijd, presentator, zendernaam) VALUES ('$numberID','$prognaam','$datum','$begintijd','$eindtijd','$presentator','$zendernaam')");
    }

    //Database zender toevoegen
    if (isset($_POST["toevoegenZender"])) {
        $zendernaam = $_POST['zendernaam'];
        $omschrijving= $_POST['omschrijving'];

        $conn->query("INSERT INTO zender (zendernaam, omschrijving) VALUES ('$zendernaam','$omschrijving')");
    }

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
