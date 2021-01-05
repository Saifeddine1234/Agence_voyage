<?php
include_once("connexion.inc.php");
$req="insert into inscription values('".$_POST['login']."','".$_POST['mdp']."')";
$res1=mysqli_query($conn,$req);
$reqt="insert into client values(null,'".$_POST['nomc']."','".$_POST['prenomc']."','".$_POST['emailc']."','".$_POST['login']."','".$_POST['mdp']."','".$_POST['num1']."')";
$res=mysqli_query($conn,$reqt);
if ($res){
		header("Location:categorie.php");
	} else 	header("Location:signup.php");
?>