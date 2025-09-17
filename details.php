<?php require 'liens/connect.php';
$id = $_GET['id'];

$sql = 'SELECT * 
        FROM disc d
        JOIN artist a ON a.artist_id=d.artist_id
        WHERE disc_id=?';
$requete = $db->prepare($sql);
$requete->execute([$id]);

$disc = $requete->fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    
<main class="container-fluid m-4">
        <h1>Details</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="">
                    Title
                    <p class="bg-light text-dark p-2 rounded border"><?= $disc["disc_title"] ?></p>
                </div>
                <div>
                    Artist
                    <p class="bg-light text-dark p-2 rounded border"><?= $disc["artist_name"] ?></p>
                </div>
                <div>
                    Year
                    <p class="bg-light text-dark p-2 rounded border"><?= $disc["disc_year"] ?></p>
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    Genre
                    <p class="bg-light text-dark p-2 rounded border"><?= $disc["disc_genre"] ?></p>
                </div>
                <div>
                    Label
                    <p class="bg-light text-dark p-2 rounded border"><?= $disc["disc_label"] ?></p>
                </div>
                <div>
                    Price
                    <p class="bg-light text-dark p-2 rounded border"><?= $disc["disc_price"] ?></p>
                </div>
            </div>
        </div>
</main>

<!--Card de l'album-->
<div class="d-flex flex-column align-items-center my-4">
    <div class="card" style="width: 18rem;">
        <img src="/pictures/<?= $disc["disc_picture"]?>" alt="" class="card-img-top">
       <div class="card-body">
            <section>
                    <div>
                        </div>
                        <div class="fw-bold">
                            <?= $disc["disc_title"] ?>
                        </div>
                        <div>
                            <?= $disc["artist_name"] ?>
                        </div>
                        <div>
                            <?= $disc["disc_year"] ?>
                        </div>
            </section>
        </div>
    </div>
<!--Boutons CRUD-->
<a href="#" class="btn btn-primary btn-sm my-3">Modifier</a>
<a href="#" class="btn btn-primary btn-sm my-3">Supprimer</a>
<a href="#" class="btn btn-primary btn-sm my-3">Retour</a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>