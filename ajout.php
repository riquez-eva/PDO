<?php
    // Connexion
   require 'liens/connect.php';

   $requete= $db->query("SELECT * FROM artist;");
   $artist=$requete->fetchAll();

?>
<?php require 'header.php' ?>
    <p>coucou</p>
<h1>Ajouter un nouveau vinyl</h1>
<main class="container-fluid p-5">
   <form action="ajout_script.php" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        Title <input class="form-control" type="text" placeholder="Enter Title" aria-label="Enter Title" name="title"> <br>
        Year <input class="form-control" type="number" placeholder="Enter Year" aria-label="Enter Year" name="year"> <br>
        Genre <input class="form-control" type="text" placeholder="Enter Genre" aria-label="Enter Genre" name="genre"> <br>
        Label <input class="form-control" type="text" placeholder="Enter Label" aria-label="Enter Label" name="label"> <br>
        Price <input class="form-control" type="number" placeholder="Enter Title" aria-label="Enter Title" name="price"> <br>
        Artist <select name="artist">
            <?php foreach($artist as $art) :?>
            <option value="<?= $art["artist_id"]?>"><?=$art["artist_name"]?></option>
            <?php endforeach?>
        </select>
        Ajouter Image <input type="file" name="picture">
        <input type="submit" value="Ajouter" class="btn btn-primary btn-sm">
        <a href="index.php" class="btn btn-primary btn-sm">Retour</a>
    </div>
    </form>
</main>
<?php require 'footer.php';?>