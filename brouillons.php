
 <?php   if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['title'])){
    //Etablir les variables
    $title=$_POST["title"];
    $year=$_POST["year"];
    $genre=$_POST["genre"];
    $label=$_POST["label"];
    $price=$_POST["price"];
    //$artist=$_POST["artist"];

    //créer la requête sql
    $sql=("INSERT INTO disc(disc_title, disc_year, disc_genre, disc_label, disc_price) VALUES (?, ?, ?, ?, ?);");
    $requete=$db->prepare($sql);
    $requete->execute([$title, $year, $genre, $label, $price]);


    //Créer la requête pour Afficher les artistes dans le dropdown

    //$requete = $db->query("select * from artist;");
    //$artist = $requete->fetchAll();


    header("Location: index.php");
    exit;
    }