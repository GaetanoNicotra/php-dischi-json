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
  <div class="container mt-4">
    <div class="row">
      <?php foreach($dischi_tradotti as $disco){ ?>
        <div class="col-4 mb-3">
          <div class="card h-100">
            <img src="..." class="card-img-top" alt="Copertina">
            <div class="card-body">
              <h5 class="card-title"><?= $disco['artista'] ?></h5>
              <p class="card-text"><?= $disco['titolo'] ?></p>
              <p class="card-text"><?= $disco['anno'] ?></p>
              <p class="card-text"><?= $disco['genere'] ?></p>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</body>

</html>
