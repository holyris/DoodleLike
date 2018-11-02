<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>DoodleLike</title>

	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>asset/css/style.css">
</head>
<body>

<div id="container">

	<div id="body">
			<h2>Formulaire de création de compte</h2><br>
      <?php echo form_open(/*base_url().'/index.php*/'/User/registration'); ?>
			<label for="login">Nom</label><br>
	    <input type="text" id="nom" name="nom" class="champ" placeholder="Ex: Wayne" required><br><br>

	    <label for="login">Prénom</label><br>
	    <input type="text" id="prenom" name="prenom" class="champ" placeholder="Ex: Bruce" required><br><br>

	    <label for="login">Email</label><br>
	    <input type="email" id="email" name="email" class="champ" placeholder="Ex: bruce.wayne@gotham.com" required><br><br>

			<label for="login">Login</label><br>
	    <input type="text" id="login" name="login" class="champ" placeholder="Ex: LeBatman" required><br><br>

	    <label for="password">Password</label><br>
	    <input type="password" id="password" name="password" class="champ" placeholder="Votre mot de passe" required><br><br>
	    <button>S'inscrire</button>
	</div>
	<p class="footer">
	</p>
</div>

</body>
</html>
