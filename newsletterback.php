<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/backoffice.css">
    <title>Back Office</title>
</head>
<body>
    <div class="ensemble">



<?php include('inc/navback.php');?>
 
<div class="droite">
<?php $mysqli = new Mysqli("localhost", "root", "root", "first_travel");
$resultat = $mysqli ->query("SELECT * FROM newsletter");
echo '<table border="5"> <tr>';
 
    echo '<th>ID</th>';
    echo '<th>Nom</th>';
    echo '<th>Email</th>';
    echo '<th>Date</th>';
    
 
echo '</tr>';
while ($ligne = $resultat->fetch_assoc())
{
    echo '<tr>';
    foreach ($ligne as $indice => $information)
    {
        echo '<td>' . $information . '</td>';
       
    }
    
    echo '</tr>';
}
echo '</table>';
?>

</div>

</div>
  