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
		<h2>Connexion</h2><br>
		<?php echo form_open(/*base_url().'index.php*/'/User/connect_form'); ?>
		<label for="login">Login</label><br>
	    <input type="text" id="login" name="login" placeholder="Ex: Darkevin"><br><br>

	    <label for="password">Password</label><br>
	    <input type="password" id="password" name="password"><br><br>
	    <button>Se connecter</button><br><br>
	</div>

	<p class="footer">
	</p>
</div>

</body>
</html>
