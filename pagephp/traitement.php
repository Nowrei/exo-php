<?php
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$age = $_POST['age'];
print("<center>Bonjour $prenom $nom.<br> </center>");

$diff = date_diff(date_create($date), date_create($aujourdhui));
 echo('<br>Votre age est '. $diff->format('%y'). "ans");
 $age = $diff->format('%y');
 
 
 if($age >= 18) {
    header('Location: https://www.amazon.fr/');
    exit();
 }
else {
    header('Location: https://us.teletubbies.com/');
    exit();
 } 


?>