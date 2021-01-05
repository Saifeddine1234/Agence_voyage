<?php
include_once("connexion.inc.php");
$req="DELETE from reservefamille WHERE	
ifc=".$_GET['idrh'];
$res=mysqli_query($conn,$req);
if($res){
	header("location:reservationfamille.php");
}else
	echo"echec de suppression";
?>
