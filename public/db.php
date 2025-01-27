<?php


$blablaserver = "localhost"; // Lokacija servera (u lokalnom okruženju: "localhost")
$korisnik = "root";          // Korisničko ime baze podataka
$sifra = "";                 // Lozinka baze podataka (prazno u lokalnom okruženju)
$imebaze = "mojabaza";       // Ime baze podataka

// Povezivanje sa bazom
$conn = new mysqli($blablaserver, $korisnik, $sifra, $imebaze);

if ($conn->connect_error) {
    die("Povezivanje nije uspelo: " . $conn->connect_error);
}
echo "hi";

?>
 