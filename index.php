<!doctype html>
<?php
	session_start();
?>

<html>
	<head>
		<title>M@Ferme - Accueil !</title>
		<meta charset = "UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="description" content="Ce site vous présente ma ferme, constituée d'une Bergerie, une porcherie et un poulailler"/>
		<meta name="author" content="Groupe 22"/>

		<link rel = "Stylesheet" href = "./css/bootstrap.css" />
		<link rel = "Stylesheet" href = "./css/style.css" />
	</head>
	<body>
		<div class = "container-fluid" >

		<?php require_once('./include/header.php'); ?>

			<div class = "row">
				<?php
					if(isset($_SESSION['login'])) {
				?>
			
				<nav class = "menu_nav col-lg-2">
					<ul class="nav navbar-nav">
						<li class="active"><a class = "aDecor" href="bergerie.html">Bergerie</a></li>
						<li><a class = "aDecor" href="porcherie.html">Porcherie</a></li>
						<li><a class = "aDecor" href="poulailler.html">Poulailler</a></li>
						<li><a href="signout.php">Se déconnecter</a></li>

								</ul>
							</nav>
							
							<?php
								}
							?>
					<?php
					if(!isset($_SESSION['login'])) {
						?>
								<a class = "aDecor" href="connexion.php"></a>
						<?php
								}
						?>
						
				<section class = "col-lg-10">
					<p class = "col-lg-12" ><h1 style = " text-align: center;">Bienvenue sur M@<span style = "color: red;">Ferme</span></h1></p>
					<p class = "col-lg-12" style = "font-style: italic; font-size: 14px; margin-left: 40px; color: rgba(10, 10, 10, 0.3); text-align: center;">Le site de la Bio diversité animale.</p>
					<div class = "row">
						<div class = "col-lg-12" >
							<div id="slider">
    								<div id="slides">
        									<figure id="slide1">
            										<img src="img/bergerie/bergerie3.jpg" alt="bergerie">
            										<figcaption>Nous élevons des animaux de la bergerie.</figcaption>
        									</figure>
        									<figure id="slide2">
            										<img src="img/porcherie/porcherie2.jpg" alt="porcherie">
            										<figcaption>Des porcs de notre porcherie</figcaption>
        									</figure>
        									<figure id="slide3">
            										<img src="img/poulailler/poulailler1.jpg" alt="poulailler">
            										<figcaption>Aperçu de notre poulailler</figcaption>
        									</figure>
   								</div>
							</div>
						</div>
					</div>
					<div id = "marge" >
						<h2 >Qu'est-ce que M@Ferme</h2>
						<h4 class = "decale" >Auteur</h4>
						<span style = "color: gray;" >M@Ferme est une plateforme développée par le <strong style = "color: black;" >Groupe 22</strong> dans le cadre d'un projet scolaire.</span>
						<h4 class = "decale" >Objectif</h4>
						<p><span style = "color: gray;" >M@Ferme est un endroit dans lequel vous pourrez retrouver différentes variétés d'animaux. Alors, n'hésitez plus et vistez les principales pages dans le menu de navigation.<br />
						Et pour les amateurs d'animaux, vous allez trouver votre compte.</span>
						</p>
					</div>
				</section>
			</div>

		<?php require_once('./include/footer.php'); ?>

		</div>
	</body>
</html>
