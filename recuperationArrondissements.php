<?php
    $bdd=mysqli_connect('localhost','root','','tp_ferme');
	if($bdd)
	{
        echo "<option></option>\n";
        if(isset($_GET['departement'])) {
            extract($_GET);
            $requete = "SELECT a.nom_arrondissement FROM arrondissement a,departement d WHERE a.nomDepartement = d.nomDepartement AND a.nomDepartement = '$departement'";
            $resultat = mysqli_query($bdd,$requete);
            while($arrondissement=mysqli_fetch_assoc($resultat)) {
                echo "<option>".$arrondissement['nom_arrondissement']."</option>\n";
            }
        }
        mysqli_close($bdd);
	}
?>