<?php
session_start();

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
$lozinka = $_POST['lozinka'];

$sql = "SELECT * FROM korisnik WHERE korisnicko_ime = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $korisnicko_ime);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($lozinka, $row['lozinka'])) {
        $_SESSION['korisnicko_ime'] = $row['korisnicko_ime'];
        $_SESSION['administratorska_prava'] = $row['administratorska_prava'];
        header("Location: administrator.php");
    } else {
        echo "Pogrešno korisničko ime ili lozinka.";
    }
} else {
    echo "Pogrešno korisničko ime ili lozinka.";
}

$stmt->close();
$conn->close();
?>
