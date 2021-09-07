<?php 
session_start();
if(isset ($_SESSION["compteur"])){
    $_SESSION["compteur"]=0;
}
header('Location: compteur.php');
exit;
?>