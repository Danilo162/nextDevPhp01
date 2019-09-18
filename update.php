<?php
/**
 * Created by PhpStorm.
 * User: Bobia
 * Date: 06/08/2019
 * Time: 21:07
 */
require_once "config.php";
if($dbh){
if($_POST){
    $nom = $_POST['firstname'];
    $prenom = $_POST['lastname'];
    $phone = $_POST['phone'];
    $mail = $_POST['mail'];
    $id = $_POST['id'];
    
    $nom_complet = $nom;
    $prepare = $prenom;
    $prepare = $dbh->prepare("UPDATE  employe SET nom_complet=:nom_complet,prenom=:prenom, contact=:phone,email=:mail WHERE id ='$id'");
    $stmt = $prepare->execute([
        ':nom_complet'=>$nom_complet,
        ':prenom'=>$prenom,
        ':phone'=>$phone,
        ':mail'=>$mail]);
    if($stmt){
        header('Location: index.php?q=2');
    }else{
        header('Location: index.php?q=0');
    }
}


}else{
    echo "Echec";
}