<?php
define("SERVEUR","localhost");
define("NOMBASE","voyage");
define("USER","root");
define("MDP","");
$conn=mysqli_connect(SERVEUR,USER,MDP,NOMBASE) or die("connect impossible");$req="UPDATE hotel SET ,idh='".$_POST['idh']."',nomh='".$_POST['nomh']."',prixh='".$_POST['prixh']."',imageh='".$_POST['urlh']."',etoileh='".$_POST['etoileh']."',adresseh='".$_POST['adresseh']."',desch='".$_POST['desch']."' WHERE idh='".$_POST['idh']."'";
$res=mysqli_query($conn,$req);
if($res){
	header("location:affichehotel.php");
}
	?>