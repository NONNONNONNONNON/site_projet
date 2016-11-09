<?php
	include('glob.php');
?>
<html>
	<body>
	<?php
		$bddSeries = new PDO('mysql:host=localhost;bdname=series;charset=utf8', 'root', ' ');
		$rep = $bddSeries->query('SELECT * FROM series ORDER BY genre');

		while($frep = $rep.fetch())
		{
			echo '<a href=page_pres_anime.php?animeName='.$frep['serieName'].'>'.$frep['serieName'].'					'.$frep['genre'].'<td>';
		}
	?>
	</body>
</html>