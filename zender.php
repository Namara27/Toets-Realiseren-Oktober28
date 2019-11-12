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
    <div id="zenderLijst">
        <?php
        //Display the data in a table
        $test = $conn->query("SELECT zendernaam, omschrijving FROM zender");
        print "<table class ='zenderlist'>";   echo '<tr>';
        $columnIndex = 0;
        foreach($test as $row) {
            if($columnIndex === 2) {
                $columnIndex = 0;
                echo '</tr><tr>';
            } else {
                $columnIndex++;
            }
            print "<td>" . $row['zendernaam'] . '<br>' . $row['omschrijving'] . '<br>' . '<a href="progOverAlt.php">Programma overzicht</a>' . "</td>";
}
        echo '</tr>';
        print "</table>";
        ?>
    </div>
    <a href="zenderToevoegen.php" class="zenderToevoegen">Zender toevoegen</a>
    <footer>
        <p>&copy; Kraeken</p>
    </footer>
</div>
</body>
</html>