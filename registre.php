<?php
include_once("db.class.php");
$DB = new DB();
?>
<?php
if(isset($_POST['connexion']))
{
include_once("connexion.inc.php");
 $reqt = "SELECT * FROM reservefamille WHERE emailc='".($_POST['login'])."'and passwordc='".($_POST['mdp'])."'";
$rest= mysqli_query($conn,$reqt) or die (mysqli_error($conn)); ;
$raw =mysqli_fetch_array($rest,MYSQLI_NUM);
if (empty($_POST['login'])|| empty($_POST['mdp']))
    {
        header("location:signin.php?Empty=remplir correctement  les champs email et mot de passe;");
    }else{
           
            header("location:confirmation.php?email=".$_POST['login']."");      
       
            }
          }
          
?>