<?php
include_once("connexion.inc.php");
$req="UPDATE pays SET nomp= '".$_POST['name']."',urlp='".$_POST['lien']."' WHERE idp='".$_POST['id']."'";
$res=mysqli_query($conn,$req);
if($res){
	header("location:affichepays.php");
}
	?>