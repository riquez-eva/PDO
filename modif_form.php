<?php
    // Connexion
   require 'liens/connect.php';
   $requete= $db->query("SELECT * FROM artist;");
   $artist=$requete->fetchAll();

    $id=$_GET["id"];

   $sql= "SELECT * from disc where disc_id=?";
   $requete_modif= $db->prepare($sql);
    $requete_modif->execute([$id]);

    $disc=$requete_modif->fetch();
?>
<?php require 'header.php' ?>
    <p>coucou</p>
<h1>Modifier le vinyl <?=$artist["artist_name"]?></h1>
<main class="container-fluid p-5">
   <form action="modif_script.php" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        Title <input class="form-control" type="text" placeholder="Enter Title" aria-label="Enter Title" name="title" value="<?= $disc["disc_title"]?>"> <br>
        Year <input class="form-control" type="number" placeholder="Enter Year" aria-label="Enter Year" name="year" value="<?= $disc["disc_year"]?>"> <br>
        Genre <input class="form-control" type="text" placeholder="Enter Genre" aria-label="Enter Genre" name="genre" value="<?= $disc["disc_genre"]?>"> <br>
        Label <input class="form-control" type="text" placeholder="Enter Label" aria-label="Enter Label" name="label" value="<?= $disc["disc_label"]?>"> <br>
        Price <input class="form-control" type="number" placeholder="Enter Title" aria-label="Enter Title" name="price" value="<?= $disc["disc_price"]?>"> <br>
        Artist <select name="artist">
            <?php foreach($artist as $art) :?>
                <option value="<?= $art["artist_id"] ?>" <?= $art["artist_id"]==$disc["artist_id"]?"selected":"" ?> ><?= $art["artist_name"] ?></option>             
            <?php endforeach?>
        </select>
        Modifier Image <input type="file" name="picture">
        <input type="submit" value="Modifier" class="btn btn-primary btn-sm">
        <div>
            <input type ="hidden" name="id" value="<?= $disc["disc_id"]?>"><br>
        </div>
        <a href="index.php" class="btn btn-primary btn-sm">Retour</a>
    </div>
    </form>
</main>
<?php require 'footer.php';?>