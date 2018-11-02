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
		<h2>Créez votre sondage <?php echo $this->session->prenom; ?> !</h2><br>

		<?php echo form_open(base_url().'index.php/Sondage/creer_sondage'); ?>
			<label for="login">Titre</label><br>
		    <input type="text" id="champ" name="titre" placeholder="Ex: Conf call" required><br><br>

		    <label for="login">Lieu</label><br>
		    <input type="text" id="champ" name="lieu" placeholder="Ex: La Street Zer" required><br><br>

		    <label for="login">Descriptif</label><br>
		    <textarea name="descri" rows="10" cols="50" placeholder=
		    "Ex: Discussion importante concernant la vente de teuteu" required=""></textarea><br><br>

		    <input type="submit" value="Submit"><br><br>
	</div>

	<p class="footer">
	</p>
</div>

</body>
</html>
