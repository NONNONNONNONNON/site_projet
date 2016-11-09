<?
	include('glob.php');

	$bdd = new PDO('mysql:host=localhost;bdname=users;charset=utf8', 'root', '');
	$buf = $bdd->query('SELECT PSEUDO AND PASSWORD FROM users WHERE pseudo='.$_FORM['pseudo']);


	if($data = $buf->fetch()))
	{
		if($data['PASSWORD'] == $_FORM['PASSWORD'])
			{
				$_SESSION['IsLogin'] = true;
				$_SESSION['name'] = $_FORM['pseudo'];
			}
		else
		{
			echo 'INVALID PASSWORD';
		}
	}
	else
	{
		echo 'INVALID USERNAME';
	}
?>