<?php
	 include('glob.php');

     $bdd =  new PDO('mysql:host=localhost;bdname=animes;charset=utf8', 'root', ' ');
     $reponse = $bdd->query('SELECT * FROM animes WHERE animeName='.$_GET['nom'].'AND episode='.$_GET['ep']); 

     $data = $reponse->fetch();

     echo "<h1> ";
     echo $data['titre'];
     echo "</h1><td><td><iframe src=".$data['lien'].'width="100%" height="100%" frameborder="0" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe><td><td>'.$data["synopsis"];

	 echo 'MAINTENANT... LE VOTE ! VIE OU MORT ? 5 ETOILES OU 0 ? CELA EST A VOUS DE DECIDER !!<td>';

	 if($_SESSION['IsLogin'] == true)
	 {
	 	if(!(array_key_exists('vote', $_POST)) )
	 	{
	 		echo '<form method=post , action="SCRIPT_PAGE.php">';
	 		echo '<select name="vote"><option value=0>cela est nul</option><option value=1>SASUKE EST TRÔ BÔ (mais pas les autres)</option><option value=2>srx...vraiment bof</option>';
	 		echo '<option value=3>mmouais..pas mal</option><option value=4>mais ce truc est bon !</option><option value=5> <3<3<3<3<3<3 </option>';
	 		echo '<input type="submit" /></form>';

	 		echo '<td>';
	 		echo 'appréciation generale : <bold>'.$data['APPRECIATION'].'</bold>';


	 	}
		 else
	 	{
	 		echo '<td>';
	 		echo 'votre appréciation : <bold>'.$_POST['vote'].'</bold>';
	 		echo 'appréciation generale : <bold>'.$data['APPRECIATION'].'</bold>';

	 		$nbVote = $data['NB_VOTE'];
	 		$apprec = $data['APPRECIATION'];
	 		$apprec = $apprec + ($_POST['vote']/$nbVote);
	 		$bdd->exec('UPDATE animes 	SET NB_VOTE='.($nbVote+1).'WHERE animeName='.$_GET['nom'].'AND episode='.$_GET['ep']);
	 		$bdd->exec('UPDATE animes   SET APPRECIATION='.($apprec).'WHERE animeName='.$_GET['nom'].'AND episode='.$_GET['ep']);
	 	}

	 }

	$reponse->CloseCursor();

	else
	{
		echo 'veuillez vous log-in pour voter, jeune margoulin';
	}


	 $bddcom = new PDO('mysql:host=localhost;bdname=commentaires;charset=utf8', 'root', ' ');
	 $reponseCom = $bddcom->query('SELECT * FROM com WHERE animeAndEp='.$_GET['nom'].$_GET['ep'].'ORDER_BY pertinence');

	 echo '<hr>';

	 	if(array_key_exists('texteCommenter', $_POST))
	 	{
	 		$bddcom->query('INSERT INTO commentaires('.$_GET['nom'].$_GET['ep'].','.$_SESSION['pseudo'].','.$_POST['texteCommenter'].', 0)');
	 		$_POST['texteCommenter'] = '';
	 	}

	 while ($dataCom = $reponseCom->fetch()) 
	 {

	 	echo $reponseCom['AUTEUR'];
	 	echo '<p>'.$reponseCom['TEXTE'].'</p>';
	 	echo '<hr>';
	 }

	 if($_SESSION['IsLogin'])
	 {
	 	echo 'commentez !<td>';
	 	echo '<form method=post, action="SCRIPT_PAGE.php"><testarea name="texteCommenter", rows=8, cols=25></textarea><input type=submit>';

	 }

	 $reponseCom->CloseCursor();
?>
