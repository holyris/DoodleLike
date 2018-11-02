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

	<header>
		<p>
			<a href="<?php echo base_url()?>index.php/Affichage/accueil"> DoodleLike </a>
		</p>
		<a href="<?php echo base_url()?>index.php/Affichage/createAcc">
			<button id="Inscription">Inscription</button>
		</a>
		<a href="<?php echo base_url()?>index.php/Affichage/connect">
			<button>Connexion</button>
		</a>
	</header>
</body>

</html>
