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

$id = $_GET['id'];
$sql = "SELECT * FROM vijesti WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<!DOCTYPE html>";
        echo "<html lang='hr'>";
        echo "<head>";
        echo "<meta charset='UTF-8'>";
        echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        echo "<title>" . $row["naslov"] . "</title>";
        echo "<link rel='stylesheet' href='style.css'>";
        echo "</head>";
        echo "<body>";
        echo "<header>";
        echo "<h1>" . $row["naslov"] . "</h1>";
        echo "</header>";
        echo "<main>";
        echo "<p>" . $row["kratki_sadrzaj"] . "</p>";
        echo "<p>" . $row["sadrzaj"] . "</p>";
        echo "<img src='" . $row["slika"] . "' alt='Slika'>";
        echo "</main>";
        echo "<footer>";
        echo "<p>Autor: Vaše Ime i Prezime | Kontakt: email@example.com | Godina: 2024</p>";
        echo "</footer>";
        echo "</body>";
        echo "</html>";
    }
} else {
    echo "Nema takve vijesti.";
}

$conn->close();
?>
