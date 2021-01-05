<?php
session_start();

if(empty($_POST['nomcontact'])||empty($_POST['emailcontact'])||empty($_POST['msgcontact'])){
	header("location:contact.php?error=s'il vous plait remplir tous les champs ");
}else{
include_once("connexion.inc.php");
$req="Insert into contact values (NULL,'".$_POST['nomcontact']."','".$_POST['emailcontact']."','".$_POST['msgcontact']."')";
$res= mysqli_query($conn,$req);
if($res){
	header("location:contact.php?contact=votre message est envoyer");
}else{
echo "error";
}
}
?>