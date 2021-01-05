<?php
include_once("db.class.php");
$DB = new DB();
?>
<?php
if(isset($_POST['Rechercher']))
{
    if(empty($_POST['datee'])||empty($_POST['dates'])){
        include_once("connexion.inc.php");
        header("location:index.php");
    }
    else{
        header("location:hotels.php?lieu=".$_POST['lieu']."");
    }
      
    }

        
?>