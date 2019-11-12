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
    <form action="zender.php" method="post" enctype="multipart/form-data">
        <div id="zenderToevoegen">
            <p>Zender</p>
            <input type="text" name="zendernaam">
            <p>Omschrijving</p>
            <input type="text" name="omschrijving">
            <p></p>
            <input type="submit" name="toevoegenZender" value="Verzenden">
            <a href="zender.php">Annuleren</a>
        </div>
    </form>
    <footer>
        <p>&copy; Kraeken</p>
    </footer>
</div>
</body>
</html>