<?php

     //var_dump($_FILES);
     //die;

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


    header("Location: index.php");