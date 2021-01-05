
<?php
include_once("connexion.inc.php");
$req="UPDATE `reservefamille` SET `confirmec`= 2 WHERE ifc=".$_GET['idc']."";
$res=mysqli_query($conn,$req)or die (mysqli_error($conn));
if($res){
	header("location:reservationfamille.php");
}
else
echo"error";
	?>