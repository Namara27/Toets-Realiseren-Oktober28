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
        <p>Geef Programma ID om te verwijderen </p>
        <input type="number" name="numberID">
        <p></p>
        <input type="submit" name="verwijder" value="Verwijderen">
    </form>
    <div id="overzichtHouder">
        <?php
        //Display the data in table
        $test = $conn->query("SELECT prognaam, datum, begintijd, eindtijd, presentator, idprogramma, zendernaam FROM programma");
        print "<table class ='zenderoverzicht'>";
        print "<tr><th>Programma ID</th><th>Programma</th><th>Datum</th><th>Tijd</th><th>Presentator</th><th>Zendernaam</th></tr>";
        foreach ($test as $row) {
            print "<tr>";
            print "<td>" . $row['idprogramma'] . "</td>";
            print "<td>" . $row['prognaam'] . "</td>";
            print "<td>" . $row['datum'] . "</td>";
            print "<td>" . $row['begintijd'] . " - " . $row['eindtijd'] . "</td>";
            print "<td>" . $row['presentator'] . "</td>";
            print "<td>" . $row['zendernaam'] . "</td>";
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



