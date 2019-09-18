<?php
/**
 * Created by PhpStorm.
 * User: Bobia
 * Date: 06/08/2019
 * Time: 20:01
 */
try {
$dbh = new PDO('mysql:host=localhost;dbname=nextdev_01', "root", "admin");
 if($dbh){
    // echo  "Connexion reussie";
     return $dbh;
 }else{
    return false;
 }
} catch (PDOException $e) {
    print " Erreur !: " . $e->getMessage() . "<br/>";
    die();
}