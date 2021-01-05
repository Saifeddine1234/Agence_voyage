<?php
include_once("connexion.inc.php");
$req="DELETE from billet WHERE idb=".$_GET['idb'];
$res=mysqli_query($conn,$req);
if($res){
	header("location:affichebillet.php");
}
?>