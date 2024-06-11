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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $naslov = $_POST['naslov'];
    $kratki_sadrzaj = $_POST['kratki_sadrzaj'];
    $sadrzaj = $_POST['sadrzaj'];
    $kategorija = $_POST['kategorija'];
    
    // Obrada slike
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["slika"]["name"]);
    move_uploaded_file($_FILES["slika"]["tmp_name"], $target_file);

    $sql = "INSERT INTO vijesti (naslov, kratki_sadrzaj, sadrzaj, slika, kategorija) 
            VALUES ('$naslov', '$kratki_sadrzaj', '$sadrzaj', '$target_file', '$kategorija')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Nova vijest je uspješno dodana.";
    } else {
        echo "Greška: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?>
