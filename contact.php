<?php include('inc/haut.php'); ?>
<?php include('inc/menu.php'); ?>


<h1 class="mecontacter">Me contacter</h1>
<hr>
<div class="ensemble">
<div class="gauche">
    <div class="phone">
        <img src="img/ic_baseline-phone.png" alt="telephone" class="icon">
        <p>+33768871304</p>
    </div>
    <p id="reseaux">Mes réseaux sociaux</p>
    <div class="reseauxsociaux">
        <a href="#"><img src="img/mdi_instagram.png" alt=""></a>
        <a href="#"><img src="img/mdi_twitch.png" alt=""></a>
        <a href="#"><img src="img/mdi_twitter.png" alt=""></a>
        <a href="#"><img src="img/mdi_youtube.png" alt=""></a>
    </div>
    <p class="politique">© 2023 Politique de confidentialité</p>
</div>
<div class="droite">
    <h2 class="formulaire">Formulaire de contact</h2>
    <form action="" method="post">
    <input pattern="[a-zA-Z]{2,10}" title="Veuillez écrire un nom valide" type="text" placeholder="Vos noms et prénoms" name="nom" id="nom" required>
    <br><br>
    <input title="Veuillez écrire une adresse email valide" type="email" name="mail" id="mail" placeholder="exemple@exemple.fr" required>
     <br><br>
    <input maxlength="300" minlength="3" type="textarea" placeholder="Votre message" id="message" name="message">
    <br>
    <div class="submit">
    <button type="submit" id="envoyer">Envoyer</button>
    </div>
    </form>
    
</div>
</div>
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


$nom = $_POST["nom"];
$mail = $_POST["mail"];
$message = $_POST["message"];



$sql = "INSERT INTO page_contact (nom, email, message)
VALUES ( '$nom', '$mail', '$message')";


if (mysqli_query($conn, $sql)) {
 
 echo '<p class="texte_echo">Merci de nous avoir contacté.<br> Nous vous répondrons dans les plus brefs délais</p>';
}  
 else {
 echo "Erreur: " . $sql . "<br>" . mysqli_error($conn);
}}
?>








<?php include('inc/footer.php'); ?>