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
		<h3>Voici tous vos sondages <?php echo $this->session->prenom ;?></h3><br>
		<p>Cliquez sur un sondage pour en voir le détail</p><br>
		<ul>
			<!-- Php dans la vue pour afficher tous les sondages (impossible a mettre dans un controleur) -->
			<?php
				$titres = $this->Sondage_model->sondage_name($_SESSION['login']);
				//while ($titres != NULL){
				foreach($titres as $titre){
					echo "<li>";
					/*echo "<a href=\"<?php echo base_url()?>index.php/Affichage/detailSondage\">";*/
					echo "<a href=\"detailSondage\">";
					print_r ($titre->titre);
					echo "</a>";
					echo "</li>";
				}
			?>
		</ul>
	</div>

	<p class="footer">
	</p>
</div>

</body>
</html>
