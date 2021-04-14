<?php


echo("Merci " . $_POST['user_name'] . " " . $_POST['user_firstname']
. " " . "de nous avoir contacté à propos de " . $_POST['user_selection'] . ".");

echo ("<br>");


echo("Un de nos conseiller vous contactera soit à l’adresse " . $_POST['user_mail']
 . " " . "ou par téléphone au " . "dans les plus brefs délais pour traiter votre demande : ");

 echo ("<br>");
 echo  $_POST['user_message'];

?>