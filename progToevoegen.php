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
        <p>Geef programma ID (tussen 1111 en 1999)</p>
        <input type="text" name="numberID">
        <p>Geef programma naam op</p>
        <input type="text" name="progNaamAdd">
        <p>Datum voor programma (yyyy-mm-dd)</p>
        <input type="text" name="progDateAdd">
        <p>Begintijd van programma (hh:mm:ss)</p>
        <input type="text" name="progBeginTijdAdd">
        <p>Eindtijd van programma (hh:mm:ss)</p>
        <input type="text" name="progEindTijdAdd">
        <p>Presentator programma</p>
        <select name="progPresentatorAdd">
            <option value="DJParker">DJ Parker</option>
            <option value="TriciaMacdonalds">Tricia Macdonalds</option>
            <option value="ColinBunkers">Colin Bunkers</option>
        </select>
        <p>Zendernaam waar programma op afspeelt</p>
        <select name="progZendernaamAdd">
            <option value="KKAlternative">KKAlternative</option>
            <option value="KKCountry">KKCountry</option>
            <option value="KKGrasshopper">KKGrashopper</option>
            <option value="KKHiphop">KKHiphop</option>
            <option value="KKLounge">KKLounge</option>
            <option value="KKMetal">KKMetal</option>
            <option value="KKRock">KKRock</option>
            <option value="KKSoul">KKSoul</option>
            <option value="KKWorkout">KKWorkout</option>
        </select>
        <p></p>
        <input type="submit" name="toevoegen" value="Toevoegen">
    </form>
    <footer>
        <p>&copy; Kraeken</p>
    </footer>
</div>
</body>
</html>



