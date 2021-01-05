<?php
include_once("connexion.inc.php");
$req="DELETE from reservehotel WHERE	
idrh=".$_GET['idrh'];
$res=mysqli_query($conn,$req);
if($res){
	header("location:reservationhotel.php");
}else
	echo"echec de suppression";
?>
