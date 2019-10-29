<?php
require_once('databaseConn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>Radioprogramma</title>
</head>
<body>
<div id="wrapper">
    <header>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="zender.php">Zenders</a></li>
                <li><a href="">Nummers</a></li>
                <li><a href="">Mederwerkers</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </nav>
    </header>
    <form action="progOverAlt.php" method="post" enctype="multipart/form-data">
        <div id="wijzigenHolder">
            <p>Welk Programma wil je wijzigen? (Geef ID)</p>
            <input type="number" name="numberID">
            <p>Programma Naam</p>
            <input type="text" name="prognaam">
            <p>Datum</p>
            <input type="text" name="datum">
            <p>Begintijd</p>
            <input type="text" name="begintijd">
            <p>Eindtijd</p>
            <input type="text" name="eindtijd">
            <p>Presentator</p>
            <input type="text" name="presentator">
            <p>Zendernaam</p>
            <input type="text" name="zendernaam">
            <p></p>
            <input type="submit" name="submit" value="Wijzig">
            <a href="progOverAlt.php">Annuleren</a>
        </div>
        <div id="overzichtHouder">
            <?php
            //Display the data in table
            $test = $conn->query("SELECT prognaam, datum, begintijd, eindtijd, presentator, idprogramma, zendernaam FROM programma");
            print "<table class ='zenderoverzicht'>";
            print "<tr><th>Programma ID</th><th>Programma</th><th>Datum</th><th>Tijd</th><th>Duur in minuten</th><th>Presentator</th><th>Zendernaam</th></tr>";
            foreach ($test as $row) {
                print "<tr>";
                print "<td>" . $row['idprogramma'] . "</td>";
                print "<td>" . $row['prognaam'] . "</td>";
                print "<td>" . $row['datum'] . "</td>";
                print "<td>" . $row['begintijd'] . " - " . $row['eindtijd'] . "</td>";
                print "<td>" . "120" . "</td>";
                print "<td>" . $row['presentator'] . "</td>";
                print "<td>" . $row['zendernaam'] . "</td>";
                print "</tr>";
            }
            print "</table>";
            ?>
        </div>
    </form>
    <footer>
        <p>&copy; Kraeken</p>
    </footer>
</div>
</body>
</html>



