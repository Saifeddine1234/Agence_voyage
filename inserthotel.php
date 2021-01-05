<?php
if(empty($_POST['datenrh'])||empty($_POST['daterh'])||empty($_POST['nuitrh']||($_POST['passwordc'])=='0')){
	header("location:hotelprincipal.php?idh=".$_POST['idh']."");
}else{  
session_start();
    $link = mysqli_connect('localhost','root','','voyage');
    $idh=$_POST['idh'];
    $servicerh=$_POST['exampleRadios'];
    $daterh=$_POST['daterh'];
    $nuitrh=$_POST['nuitrh'];
    $nomrh=$_POST['nomrh'];
    $prenomrh=$_POST['prenomrh'];
    $datenrh=$_POST['datenrh'];
    $adresserh=$_POST['adresserh'];
    $emailrh=$_POST['emailrh'];
    $telrh=$_POST['telrh'];
    $sql = "INSERT INTO reservehotel VALUES (NULL,'$idh','$servicerh', '$daterh', '$nuitrh','$nomrh','$prenomrh','$datenrh','$adresserh','$emailrh','$telrh')";
    mysqli_query($link,$sql);
  
  header("location:confirmehotel.php");
    

}
?>
<?php
include_once("db.class.php");
$DB = new DB();
?>
<?php
if(isset($_POST['connexion']))
{
include_once("connexion.inc.php");
 $reqt = "SELECT * FROM client WHERE login='".($_POST['login'])."'and mdp='".($_POST['mdp'])."'";
$rest= mysqli_query($conn,$reqt) or die (mysqli_error($conn)); ;
$raw =mysqli_fetch_array($rest,MYSQLI_NUM);
if (empty($_POST['login'])|| empty($_POST['mdp']))
    {
        header("location:signin.php?Empty=remplir correctement  les champs login et mot de passe;");
}if($raw[6]==1){
 header("location:signin.php?bloque=Votre Compte est bloquee , contactez l'admin");

}else{
             $sql = 'SELECT * FROM client WHERE login="'.($_POST['login']).'" and mdp="'.($_POST['mdp']).'"';
             $req = mysqli_query($conn,$sql);
      
             if ( $data= mysqli_fetch_array($req))

			 {
       
      
        $link = mysqli_connect('localhost','root','','projetpfe');
         $total = $panier->total();
         $budd = "" ; 
         $pseudo=$_POST['login']; 
         $var = NULL;
    $sql = "INSERT INTO paniier(`idp`, `nomp`, `prixp`, `budget`, `pseudo`, `total`)  VALUES ('0','', '0', '0', '$pseudo', '$total')";
         mysqli_query($link,$sql);
       
       header("location:return.php?revenir");
    
       }else {
            header("location:signin.php?Invalid=verifier les champs");      
       }
            }}
?>