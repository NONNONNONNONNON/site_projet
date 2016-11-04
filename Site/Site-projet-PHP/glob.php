<?php
session_start();
?>


<?php
if(array_key_exists('IsLogin', $_SESSION) && $_SESSION['IsLogin'] == false)
{
	$_SESSION['pseudo'] = "inconnu";
}

if(!array_key_exists('IsLogin', $_SESSION))
{

	$_SESSION['IsLogin'] = false;
	echo "Je ne suis pas connecté";
}

?>

<DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<link rel="stylesheet" href="nav_css.css">
	</head>
	<body>
		<header>
			TITRE DU SITE
		</header>
		<nav>
			<ul>
				<li> <a href = "Accueil.php"> Accueil </a> </li>
				<li> <a href = "Liste.php"> Liste d'animés </a> </li>
				<li> <a href = "News.php"> News </a> </li>
				<li> <a href = "Contact.php"> Contact </a> </li>
				<li> <a href = "Identifier.php"> S'identifier </a> </li>
			</ul>
		</nav>