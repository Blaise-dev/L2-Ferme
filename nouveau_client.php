<!DOCTYPE html>

<?php
    session_start();
	if($bdd = mysqli_connect('localhost','root','','tp_ferme'))
	{
        if(isset($_POST['validation'])) {
            extract($_POST);
            $requete = "INSERT INTO client VALUES('$nom','$arrondissement','$login','$password','$region','$departement','$prenom')";
            $resultat = mysqli_query($bdd,$requete);
            mysqli_close($bdd);
        }
	}
	else
	{
		die(mysqli_connect_error());	
	}
?>

<html lang="fr">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel = "Stylesheet" href = "./css/bootstrap.css" />
		<link rel = "Stylesheet" href = "./css/style.css" />
		<title>Enregistrement du client</title>
	</head>
	<body>
		<div class = "container-fluid" >

			<?php require_once('./include/header.php'); ?>

			<center>
				<h1>Formulaire d'enregistrement du client</h1>
			</center>

			<form style="width: 500px; margin: auto;" class="form-group" id="form" method="post" action="nouveau_client.php">
				<fieldset>
					<legend>Formulaire</legend> 
					<span>Enregistrement du client<hr></span>
					<label for="nom">Votre nom: </label><br/>
					<input class="form-control" id="nom" type="text" name="nom" placeholder="Votre nom"><br/>
					<label for="prenom">Votre prénom: </label><br/>
					<input class="form-control" id="prenom" type="text" name="prenom" placeholder="Votre prenom"><br/>
					<label for="login">Votre login: </label><br/>
					<input class="form-control" id="login" type="text" name="login" placeholder="Votre login"><br/>
					<label for="password">Votre mot de passe: </label><br/>
					<input class="form-control mp" id="password" type="Password" name="password" placeholder="mot de passe"><br/>
					<label for="reg"> votre région: 
						<select class="form-control" id="reg" name="region">
							<option value="" ></option>
							<option value="Extreme-Nord"> Extreme-Nord </option>
							<option value="Nord"> Nord </option>
							<option value="Adamaoua"> Adamaoua </option>
							<option value="Est"> Est </option>
							<option value="Centre"> Centre </option>
							<option value="Sud"> Sud </option>
							<option value="Littoral"> Littoral </option>
							<option value="Ouest"> Ouest </option>
							<option value="Nord-Ouest"> Nord-Ouest </option>
							<option value="Sud-Ouest"> Sud-Ouest </option>
						</select>
					</label><br>
					<label for="dep"> Votre département: 
						<select class="form-control" id="dep" name="departement">
						</select>
					</label><br>
					<label for="arr"> Votre arrondissement: 
						<select class="form-control" id="arr" name="arrondissement">
						</select>
					</label><br>
					<a class="btn btn-primary" style='color: white;' id="btn1" >Envoyer</a>
					<input class="btn btn-default" type="reset" value="Annuler" name="annuler"/>
					<input type = "hidden" name="validation" id="validation" ><br>
				</fieldset>
			</form>

			<?php require_once('./include/footer.php'); ?>

		</div>
		<script type="text/javascript">

			// Mise à jour des départements en fonction de la région sélectionnée.

			var region=document.getElementById("reg");
			region.addEventListener("change", function() {
				var reg=region.value;
				var xhr=new XMLHttpRequest();
				xhr.open('GET','recuperationDepartements.php?region='+reg);
				xhr.send();
				xhr.onload=function() {
					document.getElementById("dep").innerHTML = xhr.response;
				};
			});

			// Mise à jour des arrondissements en fonction du département sélectionné.

			var departement=document.getElementById("dep");
			departement.addEventListener("change", function() {
				var dep=departement.value;
				var xhr=new XMLHttpRequest();
				xhr.open('GET','recuperationArrondissements.php?departement='+dep);
				xhr.send();
				xhr.onload=function() {
					document.getElementById("arr").innerHTML = xhr.response;
				};
			});

			// Obliger l'utilisateur à remplir tous les champs.

			var nom=document.getElementById("nom");
			var prenom=document.getElementById("prenom");
			var login=document.getElementById("login");
			var password=document.getElementById("password");
			var region=document.getElementById("reg");
			var departement=document.getElementById("dep");
			var arrondissement=document.getElementById("arr");

			var form=document.getElementById("form");
			var btn=document.getElementById("btn1");

			btn.addEventListener("click",function() {
				if(nom.value.length == 0 || login.value.length == 0 || password.value.length == 0 || region.value.length == 0 || departement.value.length == 0 || arrondissement.value.length == 0 || password.value.length < 6) {
					if(password.value.length < 6)
						alert("Vous avez saisi un mot de passe court. Veuillez entrer un mot de passe de plus de 6 caractères");
					if(nom.value.length == 0 || login.value.length == 0 || password.value.length == 0 || region.value.length == 0 || departement.value.length == 0 || arrondissement.value.length == 0)
						alert("Vous n'avez pas rempli tous les champs !");
				}
				else
					form.submit();
			});
		</script>
	</body>

</html>