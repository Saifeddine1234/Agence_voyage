<?php
include_once("connexion.inc.php");
$req="DELETE from famille WHERE idf=".$_GET['idf'];
$res=mysqli_query($conn,$req);
if($res){
	header("location:affichefamille.php");
}
?>