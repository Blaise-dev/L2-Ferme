	<header class = "row">
		<div class = "col-lg-12" >
			<a style = "color: white; text-decoration: none; font-size: 35px; font-family: serif;" href = "index.php" title = "Retourner à l'accueil">Accueil</a>
			<?php
				if(!isset($_SESSION['login'])) {
			?>
			<div style='margin-left: 900px;'>
				<a class="btn btn-primary" style='color: white;' href="nouveau_client.php">S'inscrire </a>
				<a class="btn btn-success" style='color: white;' href="connexion.php">Se connecter</a>
			</div>
			<!--<a href="signout.php">Se déconnecter</a>-->
			<?php
				}
			?>
		</div>
	</header>