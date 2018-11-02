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
		<h3>Bienvenue <?php echo $this->session->prenom ;?> !</h3><br>
		<p>Que souhaitez vous faire ?</p>
		<a href="<?php echo base_url()?>index.php/Affichage/createSondage">
			<button>Créer un sondage</button>
		</a><br><br>
		<a href="<?php echo base_url()?>index.php/Affichage/menuSondage">
			<button>Accéder à mes sondages</button>
		</a>
	</div>

	<p class="footer">
	</p>
</div>

</body>
</html>
