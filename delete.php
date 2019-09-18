<?php
require_once "config.php";
if($dbh){
    if(isset($_GET['id']) && !empty($_GET['id'])) {
        $id = $_GET['id'];
          $stm = " DELETE FROM employe WHERE id =:id ";
         $prepare =   $dbh->prepare($stm);
        $reponse = $prepare->execute([':id'=>$id]);
        if ($reponse){
            header('Location: index.php?q=3');
        }
    }

}