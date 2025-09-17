<?php
try {
    // Connexion
    require 'liens/connect.php';

} catch (Exception $e) {
    echo 'Erreur : '.$e->getMessage().'<br />';
    echo 'N° : '.$e->getCode();
    exit('Fin du script');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="container-fluid p-5">
    <p>coucou</p>
<h1>Ajouter un nouveau vinyl</h1>
<main class="container-fluid p-5">
   <form action="" method="post">
    <div class="mb-3">
        Title <input class="form-control" type="text" placeholder="Enter Title" aria-label="Enter Title"> <br>
        Artist  <select class="form-select" aria-label="Default select example">
                     <option selected>Open this select menu</option>
                     <option value="1">One</option>
                     <option value="2">Two</option>
                     <option value="3">Three</option>
                </select><br>
        Year <input class="form-control" type="number" placeholder="Enter Year" aria-label="Enter Year"> <br>
        Genre <input class="form-control" type="text" placeholder="Enter Genre" aria-label="Enter Genre"> <br>
        Label <input class="form-control" type="text" placeholder="Enter Label" aria-label="Enter Label"> <br>
        Price <input class="form-control" type="number" placeholder="Enter Title" aria-label="Enter Title"> <br>
        <input type="submit" value="Ajouter" class="btn btn-primary btn-sm">
        <a href="index.php" class="btn btn-primary btn-sm">Retour</a>
    </div>
    </form>
</main>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>