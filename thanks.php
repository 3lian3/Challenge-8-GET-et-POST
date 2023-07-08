<?php

$firstname = $_POST['firstbname'];
$lastname = $_POST['lastname'];
$subjetc = $_POST['subject'];
$email = $_POST['email'];
$phoneNumber = $_POST['phoneNumber'];
$message = $_POST['message'];
echo 'Merci Mr/Mme '.$firstname.' '.$lastname.' de nous avoir contacté à propos de "'.$subjetc.'". Un de nos conseiller vous contactera soit à l’adresse '.$email.' ou par téléphone au '.$phoneNumber.' dans les plus brefs délais pour traiter votre demande : <br>'.
$message;

?>