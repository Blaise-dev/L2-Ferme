<!DOCTYPE html>

<?php
    session_start();
	if($bdd = mysqli_connect('localhost','root','','tp_ferme'))
	{
        if(isset($_POST['validation'])) {
            extract($_POST);
            $requete = "SELECT login, mdp FROM client WHERE login = '$login'";
            $resultat = mysqli_query($bdd,$requete);
            $coordonnees = mysqli_fetch_assoc($resultat);
            $_SESSION['login'] = $coordonnees['login'];
            $_SESSION['mdp'] = $coordonnees['mdp'];
            if($coordonnees['mdp'] == $password)
                header('refresh:2;url = index.php');
            else
                header('location: connexion.php');
            unset($_POST);
            mysqli_close($bdd);
        }
	}
	else
	{
		die(mysqli_connect_error());	
	}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel = "Stylesheet" href = "./css/style.css" />
    <link rel = "Stylesheet" href = "./css/bootstrap.css" />
    <title>Connexion</title>
</head>
<body>
	<div class = "container-fluid" >

		<?php require_once('./include/header.php'); ?>

		<center>
			<h1>Connexion</h1>
		</center>

		<form style="width: 200px; margin: auto;" class="form-group" method = "post" action = "connexion.php" id="form">
			<label for ="login">Votre login: 
				<input class="form-control" id= "log" type="text" name = "login" >
			</label><br>
			<label for="password"> Votre mot de passe: 
				<input class="form-control" id= "pass" type = "password" name="password"  >
			</label><br>
			<input type = "hidden" name="validation" id="validation" ><br>
			<a class="btn btn-success" style='color: white;' id="btn2" > Valider </a>
		</form>

		<?php require_once('./include/footer.php'); ?>

	</div>

    <script type="text/javascript"> 
            var login=document.getElementById("log");
            var password=document.getElementById("pass");
            var btn =document.getElementById("btn2");
            var form =document.getElementById("form");

            btn.addEventListener("click", function(){
                if(login.value.length == 0 || password.value.length == 0 || password.value.length < 6) {
                    if(password.value.length < 6)
                        alert("Vous avez saisi un mot de passe court. Veuillez entrer un mot de passe de plus de 6 caractères");
                    if(login.value.length == 0 || password.value.length == 0 )
                        alert("Vous n'avez pas rempli tous les champs !");
                }
                else
                    form.submit();
            });
    </script>
</body>
</html>