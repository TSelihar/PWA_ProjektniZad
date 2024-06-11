<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vijesti";

// Kreiranje konekcije
$conn = new mysqli($servername, $username, $password, $dbname);

// Provjera konekcije
if ($conn->connect_error) {
    die("Konekcija nije uspjela: " . $conn->connect_error);
}

$sql = "SELECT id, naslov, kratki_sadrzaj FROM vijesti WHERE arhiva = 0";
$result = $conn->query($sql);

echo "<!DOCTYPE html>";
echo "<html lang='hr'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Početna stranica</title>";
echo "<link rel='stylesheet' href='style.css'>";
echo "</head>";
echo "<body>";
echo "<header>";
echo "<h1>Dobrodošli na našu web stranicu</h1>";
echo "<nav>";
echo "<ul>";
echo "<li><a href='index.php'>Početna</a></li>";
echo "<li><a href='unos.html'>Unos vijesti</a></li>";
echo "<li><a href='kategorija.php'>Kategorije</a></li>";
echo "<li><a href='administrator.php'>Administracija</a></li>";
echo "</ul>";
echo "</nav>";
echo "</header>";
echo "<main>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<section>";
        echo "<h2>" . $row["naslov"]. "</h2>";
        echo "<p>" . $row["kratki_sadrzaj"]. "</p>";
        echo "<a href='clanak.php?id=" . $row["id"] . "'>Pročitaj više</a>";
        echo "</section>";
    }
} else {
    echo "Nema vijesti.";
}

echo "</main>";
echo "<footer>";
echo "<p>Autor: Vaše Ime i Prezime | Kontakt: email@example.com | Godina: 2024</p>";
echo "</footer>";
echo "</body>";
echo "</html>";

$conn->close();
?>
