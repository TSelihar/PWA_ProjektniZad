<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registracija</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Registracija</h1>
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
        <form action="registracija_skripta.php" method="post">
            <label for="korisnicko_ime">Korisničko ime:</label>
            <input type="text" id="korisnicko_ime" name="korisnicko_ime" required><br>
            <label for="lozinka">Lozinka:</label>
            <input type="password" id="lozinka" name="lozinka" required><br>
            <input type="submit" value="Registriraj se">
        </form>
    </main>
    <footer>
        <p>Autor: Vaše Ime i Prezime | Kontakt: email@example.com | Godina: 2024</p>
    </footer>
</body>
</html>
