<?php
    $bdd=mysqli_connect('localhost','root','','tp_ferme');
	if($bdd)
	{
        echo "<option></option>\n";
        if(isset($_GET['region'])) {
            extract($_GET);
            $requete = "SELECT d.nomDepartement FROM departement d,region r WHERE d.nomRegion = r.nomRegion AND d.nomRegion = '$region'";
            $resultat = mysqli_query($bdd,$requete);
            while($departement=mysqli_fetch_assoc($resultat)) {
                echo "<option>".$departement['nomDepartement']."</option>\n";
            }
        }
        mysqli_close($bdd);
	}
?>