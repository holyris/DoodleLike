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
        <?php echo form_open(base_url().'/index.php/User/registration'); ?>
		<label for="login">Nom</label>
	    <input type="text" id="nom" name="nom" placeholder="Ex: Wayne" required><br><br>

	    <label for="login">Prénom</label>
	    <input type="text" id="prenom" name="prenom" placeholder="Ex: Bruce" required><br><br>

	    <label for="login">Email</label>
	    <input type="email" id="email" name="email" placeholder="Ex: bruce.wayne@gmail.com" required><br><br>

		<label for="login">Login</label>
	    <input type="text" id="login" name="login" placeholder="Ex: Brubru77" required><br><br>

	    <label for="password">Password</label>
	    <input type="password" id="password" name="password" placeholder="Votre mot de passe" required><br><br>
	    <input type="submit" value="Submit"><br><br>
	</div>
	<p class="footer">
	</p>
</div>

</body>
</html>
