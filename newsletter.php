<?php include ('inc/haut.php'); ?>
<?php include ('inc/menu.php'); ?>
<h1>Inscription à la Newsletter</h1>
<hr>

<form action="" method="post" class="essai">
    <h2 id="titreinscr">Inscription</h2>
    <input type="text" name="nomnews" class="nomnews" placeholder="Ton nom">
    <input type="email" name="emailnews" id="emailnews" class="emailnews" placeholder="Exemple@exemple.fr">
    <button type="submit" class="sinscrire">S'inscrire</button>
</form>
<?php
if(!empty($_POST)){


$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "first_travel";

// Créer la connexion
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Vérifier la connexion
if (!$conn) {
 die("La connexion a échoué: " . mysqli_connect_error());
}


$nom = $_POST["nomnews"];
$mail = $_POST["emailnews"];


$sql = "INSERT INTO newsletter (nom, email)
VALUES ( '$nom', '$mail')";


if (mysqli_query($conn, $sql)) {
 
 echo '<p class="texte_echo1">Merci pour l\'inscription.<br> Tu fait partie de la team First Travel maintenant !</p>';
}  
 else {
 echo "Erreur: " . $sql . "<br>" . mysqli_error($conn);
}}
?>


<?php include ('inc/footer.php'); ?>