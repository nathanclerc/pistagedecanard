<?php
try {
	$bdd = new
	PDO('mysql:host=localhost;dbname=canardVolant;charset=utf8',
		'simoccauch19','azerty');
} catch (Exception $e) {
	die('Erreur:'.$e->getMessage());
}
$reponse = $bdd->query('SELECT * FROM infoCanard ORDER BY jour DESC') ;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ils sont où?</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="contain">
		<a href="ajouter.php"><button id="adduck">Ajouter un canard</button></a>
		<table id="tableau">
			<thead>
				<th>Lieu</th>
				<th>Date/Heure</th>
				<th>Race</th>
				<th>Couleur</th>
			</thead>
			<tbody>
				<?php
				while($donnees=$reponse->fetch()){
					$temps = date('d-m-Y H:i', strtotime($donnees['jour']));
					echo '<tr><td>' . $donnees['lieu'] .'<td>' . $temps
					. '<td>' . $donnees['race'] .'<td>' . $donnees['couleur'];
				}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>