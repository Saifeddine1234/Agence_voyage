<?php
session_start();

if(empty($_POST['datenc'])||empty($_POST['datec'])||empty($_POST['passwordc'])){
	header("location:hotelpage1.php?idf=".$_POST['idf']."");
}else{  
    $link = mysqli_connect('localhost','root','','voyage');
    $idf=$_POST['idf'];
    $diplomec=$_POST['diplomec'];
    $nomc=$_POST['nomc'];
    $prenomc=$_POST['prenomc'];
    $datenc=$_POST['datenc'];
    $datec=$_POST['datec'];
    $adressec=$_POST['adressec'];
    $emailc=$_POST['emailc'];
    $telc=$_POST['telc'];
    $typec=$_POST['typec'];
    $passwordc=$_POST['passwordc'];

    $diplome=$_POST['diplomec'];
    $sql = "INSERT INTO reservefamille VALUES (NULL,'$idf', '$diplomec','$nomc','$prenomc','$datenc','$datec','$adressec','$emailc','$telc','$typec','$passwordc','0')";
    mysqli_query($link,$sql);
  
  header("location:confirmefamille.php");
}

?>
<?php
include_once("db.class.php");
$DB = new DB();
?>
