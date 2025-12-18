<?php

$id=$_GET["id"];
//GET car dans l'url on voit l'id

require("liens/connect.php");

$sql= "DELETE FROM disc WHERE disc_id=?";
$requete = $db->prepare($sql);
$requete->execute([$id]);

header("Location: index.php");