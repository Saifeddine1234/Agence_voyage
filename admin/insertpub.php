<?php
include_once ("connexion.inc.php");
$reqt="INSERT INTO pub values (NULL,'".$_POST['nompub']."')";
$res=mysqli_query($conn,$reqt);
$id=Mysqli_Insert_id($conn);
if ($res==1){
	header("Location: affichepub.php");
}
else echo ("erreur");
?>