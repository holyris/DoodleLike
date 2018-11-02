<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>DoodleLike</title>
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url();?>asset/css/style.css">
</head>
<body>

<div id="container">

	<div id="body">
		<h3>Détail du sondage</h3><br>
    <?php
      $cle = $_GET['cle'];
      $data = $this->Sondage_model->detail_sondage($cle);
      foreach($data as $donnee){
        echo "<div id=\"details\">";
        echo "<li>";
        echo "Titre : ";
        print_r ($donnee->titre);
        echo "</li><li>";
        echo "Lieu : ";
        print_r ($donnee->lieu);
        echo "</li><li>";
        echo "Description : ";
        print_r ($donnee->descri);
        echo "</li><li>";
        echo "Clé : ";
        print_r ($cle);
        echo "</li>";
        echo "</div>";
      }
    ?>
	<br><br>

	<div>
	<h4>Sélectionner les dates pour lesquelles vous êtes disponible</h4>
	<?php
	 	echo form_open('/Date/ajouter_disponibilite?cle='.$_GET['cle']);

		$cle = $_GET['cle'];
		$data = $this->Date_model->afficher_date($cle);

		$i =0;
		$checkbox = 0;

		foreach($data as $donnee){
			$name="checkbox[$i]";
			$stat = $this->Date_model->check_id_date($donnee->id);
			echo "<div id=\"details\">";
			echo "<li>";
			echo "Le ";
			print_r ($donnee->jour);
			echo " de ";
			print_r ($donnee->heuredebut);
			echo " à ";
			print_r ($donnee->heurefin);
		if ($stat==Array()){
					echo " <input id=\"".$donnee->id."\" type=\"checkbox\" name=$name >";
			}	else {
				echo "<a href=\"../Date/delete_disponibilite?cle=".$cle."&id_date=".$donnee->id."\" ";
				echo "<button id=\"suppr\" type=\"button\"\">Supprimer cette disponibilite</button>";
				echo "</a>";
			}
			echo "</li>";
			echo "</div>";
			$i++;
		}
	?>
	 <br>
	 	<button>Voter</button>
</div>

	<p class="footer">
	</p>
</div>

</body>
</html>
