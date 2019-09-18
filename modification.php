<?php
require_once "config.php";
if($dbh){
if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
    $data = $dbh->query("SELECT * FROM employe WHERE id='$id'")->fetch(PDO::FETCH_OBJ);
    if(!$data){
   header("location:index.php");
    }
}



}

?>
<!DOCTYPE html>
<html>
<head>
	<title>formulaire de saisie</title>
</head>
<body>
  <div style="display: inline-block;float: left;padding: 25px">
	<form action="update.php" method="post">

<h1>formulaire de modification</h1>


<p>	
		<label for="firstname">NOM</label><br>
		<input type="text" id="firstname" name="firstname" value="<?=$data->nom_complet?>">
		<input type="hidden"  name="id" value="<?=$data->id?>">
</p>
<p>
		<label for="lastname">PRENOM</label><br>
		<input type="text" id="lastname" name="lastname" value="<?=$data->prenom?>">
	</p>
	<p>
		<label for="phone">TELEPHONE</label><br>
		<input type="tel" id="phone" name="phone" value="<?=$data->contact?>">
	</p>
	<p>
		<label for="mail">EMAIL</label><br>
		<input type="email" id="mail" name="mail" value="<?=$data->email?>">
	</p>

	<p>
		<button type="submit" >Enregistrer</button>
	</p>
	</form>
  </div>


</body>
</html>