

<?php
try {
    // Connexion
    require 'liens/connect.php';
    // Requête tableau disque
    $requete1 = $db->query('SELECT * FROM disc join artist on disc.artist_id=artist.artist_id');
    // faire un JOIN bkabkab ON pour afficher les éléments de deux tables différentes
    $tableau1 = $requete1->fetchAll(PDO::FETCH_OBJ);
    $requete1->closeCursor();
    $total = count($tableau1);
    $half = ceil($total / 2);
    $firstHalf = array_slice($tableau1, 0, $half);
    $secondHalf = array_slice($tableau1, $half);

    // Nombre de disque
    $requete3 = $db->query('SELECT count(*) as "total" FROM disc');
    $countDisc = $requete3->fetch(PDO::FETCH_ASSOC);
    $totalDiscs = $countDisc['total'];
} catch (Exception $e) {
    echo 'Erreur : '.$e->getMessage().'<br />';
    echo 'N° : '.$e->getCode();
    exit('Fin du script');
}
?>
<?php require 'header.php'; ?>
    <h1>Liste des disques (<?php echo $totalDiscs; ?>)</h1>
<!--bouton ajouter-->
    <div class="d-flex justify-content-end mb-3">
    <a href="ajout.php" class="btn btn-primary btn-sm ">Ajouter</a>
    </div>
    <main class="container mt-5">
        <div class="row">
    <div class="col-md-6">
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Couverture d'Album</th>
            <th>Artiste</th>
        </tr>
        </thead>
        <tbody>

        <!-- Premiere colonne de gauche-->
    <?php foreach ($firstHalf as $disc) { ?>
        <tr>
            <td>
                <img src="pictures/<?php echo htmlspecialchars($disc->disc_picture); ?>" alt="image du disque" style="width:200px; height: auto;">
            </td>
            <td>
                <h4><?php echo htmlspecialchars($disc->disc_title); ?></h4> <br>
                <?php echo htmlspecialchars($disc->artist_name); ?><br>
               Label : <?php echo htmlspecialchars($disc->disc_label); ?> <br>
               Year : <?php echo htmlspecialchars($disc->disc_year); ?> <br>
               Genre : <?php echo htmlspecialchars($disc->disc_genre); ?> <br>

                <a href="details.php?id=<?php echo htmlspecialchars($disc->disc_id); ?>" class="btn btn-primary btn-sm">Détails</a>
            </td>
            <?php } ?>
        </tr>
        </tbody>
    </table>
    </div>
<!-- Première colonne de droite-->

<div class="col-md-6">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Couverture d'Album</th>
                <th>Artiste</th>
            </tr>
        </thead>
        <tbody>
             <?php foreach ($secondHalf as $disc) { ?>
        <tr>
            <td>
                <img src="pictures/<?php echo htmlspecialchars($disc->disc_picture); ?>" alt="image du disque" style="width:200px; height: auto;">
            </td>
            <td>
                <h4><?php echo htmlspecialchars($disc->disc_title); ?></h4> <br>
                <?php echo htmlspecialchars($disc->artist_name); ?><br>
               Label : <?php echo htmlspecialchars($disc->disc_label); ?> <br>
               Year : <?php echo htmlspecialchars($disc->disc_year); ?> <br>
               Genre : <?php echo htmlspecialchars($disc->disc_genre); ?> <br>

                <a href="details.php?id=<?php echo htmlspecialchars($disc->disc_id);?>" class="btn btn-primary btn-sm">Détails</a>
            </td>
            <?php } ?>
        </tbody>
    </table>

</div>
</div>
    </main>
<?php require 'footer.php'; ?>
