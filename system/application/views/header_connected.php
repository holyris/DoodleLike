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
		<a href="<?php echo base_url()?>index.php/User/end_session">
			<button type="button">Déconnexion</button>
		</a>

		<a href="<?php echo base_url()?>index.php/Affichage/interfaceSondage">
			<button type="button">Menu Sondage</button>
		</a>
	</header>

</body>
</html>
