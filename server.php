<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Controllo che tutti i campi esistano
    if(isset($_POST['titolo'], $_POST['artista'], $_POST['anno'], $_POST['genere'], $_POST['url'], $_POST['cover'])) {

        // recupero i dati dal form
        $titolo = $_POST['titolo'];
        $artista = $_POST['artista'];
        $anno = $_POST['anno'];
        $genere = $_POST['genere'];
        $url = $_POST['url'];
        $cover = $_POST['cover'];

        // recupero il file json e lo rendo leggibile da php con il metodo file get content
        $dischi = file_get_contents("dischi.json");

        //converto il json in stringa php 
        // il true dice a PHP: 
        // “NON creare oggetti. 
        // Trasforma il JSON in array associativi.”
        $dischi_tradotti = json_decode($dischi, true);
        if(!is_array($dischi_tradotti)){
            $dischi_tradotti = [];
        }

        // aggiungo il nuovo album all'array
        $dischi_tradotti[] = [
            'titolo' => $titolo,
            'artista' => $artista,
            'anno' => $anno,
            'genere' => $genere,
            'url' => $url,
            'cover' => $cover
        ];

        // inserisco il nuovo disco //converto l'array in json
        file_put_contents("dischi.json", json_encode($dischi_tradotti, JSON_PRETTY_PRINT));

        // reindirizzo alla home
        header("Location: index.php");
        exit;
    }

    // Se mancano campi, torno a index.php
    header("Location: index.php");
    exit;
}
?>
