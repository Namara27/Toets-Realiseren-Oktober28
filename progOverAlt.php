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
    <div id="overzichtHouder">
        <h3>KKAlternative</h3>
        <?php
        //Display the data in a table
        $test = $conn->query("SELECT prognaam, datum, begintijd, eindtijd, presentator FROM programma");
        print "<table class ='zenderoverzicht'>";
        print "<tr><th>Programma</th><th>Datum</th><th>Tijd</th><th>Duur in minuten</th><th>Presentator</th><th></th><th><a href='progToevoegen.php'>Toevoegen</a></th></tr>";
        foreach ($test as $row) {
            print "<tr>";
            print "<td>" . $row['prognaam'] . "</td>";
            print "<td>" . $row['datum'] . "</td>";
            print "<td>" . $row['begintijd'] . " - " . $row['eindtijd'] . "</td>";
            print "<td>" . "120" . "</td>";
            print "<td>" . $row['presentator'] . "</td>";
            print "<td>" . '<a href="progWijzigen.php">Wijzig</a>' . "</td>";
            print "<td>" . '<a href="progVerwijderen.php">Verwijder</a>' . "</td>";
            print "</tr>";
        }
        print "</table>";
        ?>
    </div>
    <footer>
        <p>&copy; Kraeken</p>
    </footer>
</div>
</body>
</html>