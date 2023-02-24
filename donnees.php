<?php
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
 echo "Nouvel enregistrement créé avec succès";
} else {
 echo "Erreur: " . $sql . "<br>" . mysqli_error($conn);
}
?>

<?php
$sql = "SELECT * FROM page_contact";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
 echo "<table><tr><th>Nom</th><th>Email</th><th>Message</th></tr>";
 while($row = mysqli_fetch_assoc($result)) {
   echo "<tr><td>" . $row["nom"]. "</td><td>" . $row["email"]. "</td><td>" . $row["message"]. "</td><td>";
 }
 echo "</table>";
} else {
 echo "0 results";
}
mysqli_close($conn);
?>





<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "contact_form";

// // Créer la connexion
// $conn = mysqli_connect($servername, $username, $password, $dbname);

// // Vérifier la connexion
// if (!$conn) {
//  die("La connexion a échoué: " . mysqli_connect_error());
// }

// $nom = $_POST["nom"];
// $email = $_POST["mail"];
// $message = $_POST["message"];

// $sql = "INSERT INTO messages (nom, email, message)
// VALUES ('$nom', '$email', '$message')";

// if (mysqli_query($conn, $sql)) {
//  echo "Nouvel enregistrement créé avec succès";
// } else {
//  echo "Erreur: " . $sql . "<br>" . mysqli_error($conn);
// }

// mysqli_close($conn);
 ?>
