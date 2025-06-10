<?php

    // importo il trait che utilizzo in Movie.php
    require_once "./Traits/HasDirector.php";

    // importo le classi
    require_once "./Models/Genre.php";
    require_once "./Models/Movie.php";

    // importo l'array di film
    require_once "./db.php";

    var_dump($movies);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Movies</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .card-img img{
            height: 300px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Movies</h1>
        <hr>

        <div class="cards-container d-flex flex-column gap-4">
            <?php 
            
                foreach($movies as $movie) {
            
            ?>

            <div class="card">
                <div class="card-title px-3 mt-3">
                    <h3><?php echo $movie->title ?></h3>
                </div>
                <div class="card-body">
                    <div class="card-img mb-4">
                        <img src="<?php echo $movie->cover ?>" alt="<?php echo $movie->title ?>">
                    </div>
                    <div class="text-muted mb-2">
                        <?php echo $movie->getDirector() ?>
                    </div>
                    <div class="card-text mb-2">
                        <?php echo $movie->release_year ?>
                    </div>
                    <div class="card-text mb-2">
                        <?php echo $movie->getGenreName() ?>
                    </div>
                    <div class="card-text mb-2">
                        <?php echo $movie->description ?>
                    </div>
                </div>
            </div>

            <?php
            
                }
            
            ?>
        </div>
    </div>
</body>
</html>