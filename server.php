<?php
// recupero il file json e lo rrendo leggibile da php con il metodofile get content
$dischi = file_get_contents("./dischi.json");

//converto il json in stringa php
//il true dice a PHP:
// “NON creare oggetti.
// Trasforma il JSON in array associativi.”
$dischi_tradotti = json_decode($dischi, true);

?>