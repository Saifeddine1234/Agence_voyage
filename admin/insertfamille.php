<?php
include_once ("connexion.inc.php");
$reqt= "INSERT INTO famille values (NULL,'".$_POST['nomf']."','".$_POST['prenomf']."','".$_POST['agef']."','".$_POST['lieuf']."','".$_POST['adressef']."','".$_POST['imagef']."','".$_POST['periodef']."','".$_POST['travailf']."','".$_POST['horairef']."','".$_POST['descf']."')";
$res=mysqli_query($conn,$reqt);
if ($res==1){
	header("Location: ajoutefamille.php");
}
else header("Location: erreur.php");



