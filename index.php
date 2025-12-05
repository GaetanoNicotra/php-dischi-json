<?php
// recupero i file dal server
require_once("./server.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Document</title>
</head>

<body>
      <div class="container">
          <h1>PHP music</h1>

       <!-- form -->
<form action="">
  <div class="container">
    <div class="row">

      <!-- COLONNA SINISTRA -->
      <div class="col-4">
        <div class="mb-3">
          <label class="form-label">Inserisci il titolo</label>
          <input type="text" class="form-control">
        </div>

        <div class="mb-3">
          <label class="form-label">Inserisci il nome</label>
          <input type="text" class="form-control">
        </div>

        <div class="mb-3">
          <label class="form-label">Inserisci l'anno</label>
          <input type="text" class="form-control">
        </div>
      </div>

      <!-- COLONNA DESTRA -->
      <div class="col-4">
        <div class="mb-3">
          <label class="form-label">Inserisci il genere</label>
          <input type="text" class="form-control">
        </div>

        <div class="mb-3">
          <label class="form-label">Inserisci il link</label>
          <input type="text" class="form-control">
        </div>

        <div class="mb-3">
          <label class="form-label">Inserisci l'immagine</label>
          <input type="text" class="form-control">
        </div>
      </div>

    </div>

    <button class="btn btn-primary mt-3">Invia</button>
  </div>
</form>


<!-- header -->


        <!-- Card -->
        <div class="container mt-4">
          <div class="row">
          <?php foreach($dischi_tradotti as $disco){ ?>
            <div class="col-3 mb-3">
                <div class="card h-100">
                  <img src="<?= $disco['cover'] ?>" class="card-img-top" alt="Copertina"  style="max-height:250px;" >
                  <div class="card-body">
                  <h5 class="card-title"><?= $disco['artista'] ?></h5>
                  <p class="card-text"><?= $disco['titolo'] ?></p>
                  <p class="card-text"><?= $disco['anno'] ?></p>
                  <p class="card-text"><?= $disco['genere'] ?></p>
                  <a class="card-text"><?= $disco['url'] ?></a>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
</body>

</html>
