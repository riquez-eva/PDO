<?php
    // Connexion
   require 'liens/connect.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
//manière de sécuriser
    move_uploaded_file($_FILES["picture"]["tmp_name"], "pictures/photo.png");      

    
    $title = $_POST["title"];
    $year = $_POST["year"];
    $label = $_POST["label"];
    $genre = $_POST["genre"];
    $price = $_POST["price"];
    $artist = $_POST["artist"];
    $picture = $_POST["picture"];
    
    
    require(__DIR__."/liens/connect.php");
    
    $sql = "INSERT INTO disc (disc_title, disc_year, disc_label, disc_genre, disc_price, artist_id, disc_picture) VALUES (?, ?, ?, ?, ?, ?, ?);";
    $requete = $db->prepare($sql);
    $requete->execute([$title, $year, $label, $genre, $price, $artist, 'photo.png']);
}


   $requete= $db->query("SELECT * FROM artist;");
   $artist=$requete->fetchAll();

?>
<?php require 'header.php' ?>
    <p>coucou</p>
<h1>Ajouter un nouveau vinyl</h1>
<main class="container-fluid p-5">
   <form action="" method="post" enctype="multipart/form-data">
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