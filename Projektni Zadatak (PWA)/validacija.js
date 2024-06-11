document.getElementById("vijestForma").addEventListener("submit", function(event) {
    let naslov = document.getElementById("naslov").value;
    let kratkiSadrzaj = document.getElementById("kratki_sadrzaj").value;
    let sadrzaj = document.getElementById("sadrzaj").value;
    let slika = document.getElementById("slika").value;
    let kategorija = document.getElementById("kategorija").value;

    if (naslov === "" || kratkiSadrzaj === "" || sadrzaj === "" || slika === "" || kategorija === "") {
        alert("Sva polja moraju biti popunjena!");
        event.preventDefault();
    }
});
