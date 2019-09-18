<?php
require_once "config.php";
if($dbh){

    $datas = $dbh->query("SELECT * FROM employe ORDER BY id desc ")->fetchAll(PDO::FETCH_OBJ);

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>formulaire de saisie</title>
</head>
<body>
<!--<img src="abissa_03.jpg" width="400" >-->
  <div style="display: inline-block;float: left;padding: 25px">
	<form action="traitement.php" method="post">
<h1>formulaire de saisie</h1>
        <h4> <?php
            if(isset($_GET['q'])){
                if($_GET['q']==1){
                    echo "<h1 style='color: dodgerblue'>Enregistrement effectué </h1> ";
                } elseif ($_GET['q']==2){
                    echo "<h1 style='color: green'>Modification effectuée </h1> ";
                }elseif ($_GET['q']==3){
                    echo "<h1 style='color: orange'>Suppression réussie </h1> ";
                }else{
                    echo "<h1 style='color: red'>echec d'enregistrement  </h1> ";
                }
            }
            ?>
        </h4>

<p>	
		<label for="firstname">NOM</label><br>
		<input type="text" id="firstname" name="firstname">
</p>
<p>
		<label for="lastname">PRENOM</label><br>
		<input type="text" id="lastname" name="lastname">
	</p>
	<p>
		<label for="phone">TELEPHONE</label><br>
		<input type="tel" id="phone" name="phone">
	</p>
	<p>
		<label for="mail">EMAIL</label><br>
		<input type="email" id="mail" name="mail">
	</p>

	<p>
		<button type="submit" >Enregistrer</button>
	</p>
	</form>
  </div>
   <div style="display: inline-block;float: left;padding: 25px">
      <h1> LISTE DES EMPLOYES </h1>
       <table border="1" width="100%" cellpadding="5" >
           <thead style="background: orange;color: white">
           <tr>
               <th>Nom </th>
               <th>Prénom</th>
               <th>Email</th>
               <th>Contact</th>
               <th>Photo</th>
               <th>Actions</th>
           </tr>
           </thead>
           <tbody>
           <?php foreach ($datas as $data) {?>
               <tr>
                   <td><?=$data->nom_complet?></td>
                   <td><?=$data->prenom?></td>
                   <td><?=$data->email?></td>
                   <td><?=$data->contact?></td>
                   <td></td>
                   <td>
                       <a href="modification.php?id=<?=$data->id?>">Modifier</a>
                       <a href="delete.php?id=<?=$data->id?>">Supprimer</a>
                   </td>
               </tr>
           <?php }?>
           </tbody>
           <tfoot>
           </tfoot>
       </table>

   </div>

</body>
</html>