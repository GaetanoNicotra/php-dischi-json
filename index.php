<?php
// Leggo il JSON dei dischi
$dischi = file_get_contents("dischi.json");
$dischi_tradotti = json_decode($dischi, true);
if(!is_array($dischi_tradotti)){
    $dischi_tradotti = [];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Music</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>PHP Music</h1>

        <!-- FORM -->
        <form action="server.php" method="POST">
            <h3>Aggiungi un nuovo brano</h3>
            <div class="row">
                <!-- Colonna sinistra -->
                <div class="col-3">
                    <div class="mb-3">
                        <label class="form-label">Titolo</label>
                        <input type="text" class="form-control" name="titolo" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Artista</label>
                        <input type="text" class="form-control" name="artista" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Anno</label>
                        <input type="text" class="form-control" name="anno" required>
                    </div>
                </div>

                <!-- Colonna destra -->
                <div class="col-3">
                    <div class="mb-3">
                        <label class="form-label">Genere</label>
                        <input type="text" class="form-control" name="genere" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Link</label>
                        <input type="text" class="form-control" name="url" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Cover (URL immagine)</label>
                        <input type="text" class="form-control" name="cover" required>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-2">Invia</button>
        </form>

        <!-- CARD DEI DISCHI -->
        <div class="row mt-4">
            <?php foreach($dischi_tradotti as $disco): ?>
                <div class="col-3 mb-3">
                    <div class="card h-100">
                        <img src="<?=$disco['cover'] ?>" class="card-img-top" alt="Copertina" style="max-height:250px;">
                        <div class="card-body">
                            <h5 class="card-title"><?=$disco['artista'] ?></h5>
                            <p class="card-text"><?=$disco['titolo'] ?></p>
                            <p class="card-text"><?=$disco['anno'] ?></p>
                            <p class="card-text"><?=$disco['genere'] ?></p>
                            <a href="<?=$disco['url'] ?>" target="_blank"><?=$disco['url'] ?></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
