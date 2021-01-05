<?php
include_once("connexion.inc.php");
$req="DELETE from reservebillet WHERE	
idrb=".$_GET['idrh'];
$res=mysqli_query($conn,$req);
if($res){
	header("location:reservationbillet.php");
}else
	echo"echec de suppression";
?>
