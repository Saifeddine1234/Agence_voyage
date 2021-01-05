<?php
if(empty($_POST['datenrb'])||empty($_POST['daterb'])){
 header("location:reservebillet.php?idb=".$_POST['idb']."");
}else{
     session_start();
     $link = mysqli_connect('localhost','root','','voyage');
     $idh=$_POST['idb'];
     $jourrb=$_POST['jourrb'];
     $nomrb=$_POST['nomrb'];
     $prenomrb=$_POST['prenomrb'];
     $datenrb=$_POST['datenrb'];
     $daterb=$_POST['daterb'];
     $adresserb=$_POST['adresserb'];
     $emailrb=$_POST['emailrb'];
     $telrb=$_POST['telrb'];
     $classerb=$_POST['exampleRadios'];
     $sql = "INSERT INTO reservebillet VALUES (NULL,'$idh', '$daterb','$classerb','$nomrb','$prenomrb','$datenrb','$emailrb','$telrb','$adresserb','$jourrb')";
     mysqli_query($link,$sql);
   header("location:confirme.php");
}

?>
