<?php

/* Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi. */

include '../includes/data/db.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css' integrity='sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==' crossorigin='anonymous' />
    <link rel="stylesheet" href="../style.css">
    <title>Dischi</title>
</head>

<body>
    <header class="py-2 px-4">
        <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/7/75/Spotify_icon.png" alt="Logo" />
    </header>

    <main>
        <div class="container">
            <div class="row">
                <!-- Qui il foreach -->
                <?php foreach ($database as $disc) : ?>
                    <div class="col">
                        <!-- Card -->
                        <div class="card-disc text-center" role="button">
                            <img src="<?= $disc['poster'] ?>" alt="Poster" />
                            <h4 class="text-white mt-3"><?= $disc['title'] ?></h4>
                            <p class="text-secondary m-0 pt-2"><?= $disc['author'] ?></p>
                            <p class="text-secondary"><?= $disc['year'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
</body>

</html>