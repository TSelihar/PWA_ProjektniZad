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

$korisnicko_ime = $_POST['korisnicko_ime'];
$lozinka = password_hash($_POST['lozinka'], PASSWORD_BCRYPT);

$sql = "INSERT INTO korisnik (korisnicko_ime, lozinka, administratorska_prava) VALUES (?, ?, 0)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $korisnicko_ime, $lozinka);

if ($stmt->execute()) {
    echo "Registracija uspješna!";
} else {
    echo "Pogreška: " . $sql . "<br>" . $conn->error;
}

$stmt->close();
$conn->close();
?>
