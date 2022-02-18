<?php
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$age = $_POST['age'];
$message = $_POST['message'];
print("<center>Bonjour $prenom $nom.<br> </center>
<center>$message <br></center>");

$aujourdhui = date("Y-m-d");
$diff = date_diff(date_create($_POST['age']), date_create($aujourdhui));
  echo 'Vous avez '.$diff->format('%y').' ans';








?>