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
    <div id="zenderToevoegen">
        <p>Zender</p>
        <input type="text" name="zender">
        <p>Omschrijving</p>
        <input type="text" name="omschrijving">
        <p></p>
        <input type="submit" name="verstuur" value="Verzenden">
    </div>
    <div id="zenderLijst">
        <?php
        //Display the data in a table
        $test = $conn->query("SELECT zendernaam, omschrijving FROM zender");
        print "<table class ='zenderlist'>";
        foreach ($test as $row) {
            print "<tr>";
            print "<td rowspan='3' height='400px'>" . $row['zendernaam'] . '<br>' . $row['omschrijving'] . '<br>' . '<a href="progOverAlt.php">Programma overzicht</a>' . "</td>";
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