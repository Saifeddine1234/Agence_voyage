<?php
include_once("connexion.inc.php");
$req="DELETE from hotel WHERE idh=".$_GET['idh'];
$res=mysqli_query($conn,$req);
if($res){
	header("location:affichehotel.php");
}
?>