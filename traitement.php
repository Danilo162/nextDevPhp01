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
    // ici je met le nom et le prenom ensemble pour avoir le nom complet
   // $nom_complet = $nom." ".$prenom;
    $nom_complet = $nom;
    $prepare = $prenom;
   // $stmt = $dbh->query("INSERT INTO employe (nom_complet, contact,email) VALUES ('$nom_complet', '$phone','$mail')");
   // 1 - PREPARE LA REQUETTE , DANS VALUES JE CREER DES ALIAS
    $prepare = $dbh->prepare("INSERT INTO employe (nom_complet,prenom, contact,email) VALUES (:nom_complet,:prenom, :phone,:mail)");
   // 2 - EXECUTE LA REQUETTE AVEC NOS VALEUR
    $stmt = $prepare->execute([
        ':nom_complet'=>$nom_complet,
        ':prenom'=>$prenom,
        ':phone'=>$phone,
        ':mail'=>$mail]);
    if($stmt){
        header('Location: index.php?q=1');
    }else{
        header('Location: index.php?q=0');
    }
}


}else{
    echo "Echec";
}