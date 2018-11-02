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
	</div>
	<br><br>

	<a <?php echo "href=\"createDate?cle=$cle\">";?>
		<button type="button" >Ajouter proposition</button>
	</a><br><br>

	<?php
		$cle = $_GET['cle'];
		$data = $this->Date_model->afficher_date($cle);
		foreach($data as $donnee){
			echo "<div id=\"details\">";
			echo "<li>";
			echo "Le ";
			print_r ($donnee->jour);
			echo " de ";
			print_r ($donnee->heuredebut);
			echo " à ";
			print_r ($donnee->heurefin);
			echo "</li>";
			echo "</div>";
		}
	?>
	 <br>
	<a <?php echo "href=\"createDate?cle=$cle\">";?>
		<button type="button" >Voter</button>
	</a>

	<p class="footer">
	</p>
</div>

</body>
</html>
