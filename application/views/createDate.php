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
		<h2>Choisissez vos propositions <?php echo $this->session->prenom; ?> !</h2><br>

		<?php echo form_open(/*base_url().'index.php/*/'Date/creer_date?cle='.$_GET['cle']); ?>
			<label>Jour</label><br>
			<input type="date" id="date" name="jour" required><br><br>

			<label>Heure de debut</label><br>
			<input id="time" type="time" name="heure_debut"><br>

			<label>Heure de fin</label><br>
			<input id="time" type="time" name="heure_fin"><br><br>

		  <button>Ajouter cette date</button>
	</div>

	<p class="footer">
	</p>
</div>

</body>
</html>
