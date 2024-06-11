<?php
session_start();

if (!isset($_SESSION['korisnicko_ime'])) {
    header("Location: prijava.php");
    exit();
}

if ($_SESSION['administratorska_prava'] != 1) {
    echo "Nemate administratorska prava za pristup ovoj stranici.";
    exit();
}
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administracija</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Administracija</h1>
        <nav>
            <ul>
                <li><a href="index.php">Početna</a></li>
                <li><a href="unos.html">Unos vijesti</a></li>
                <li><a href="kategorija.php">Kategorije</a></li>
                <li><a href="administrator.php">Administracija</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Upravljanje vijestima</h2>
        <!-- Ovdje dodajte kod za prikaz vijesti iz baze podataka s mogućnošću brisanja -->
    </main>
    <footer>
        <p>Autor: Vaše Ime i Prezime | Kontakt: email@example.com | Godina: 2024</p>
    </footer>
</body>
</html>
