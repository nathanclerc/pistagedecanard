<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>J'en vois un!</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="formulaire">
		<form method="POST" action="">
			<div id="champs">
				<div id="etage1">
					<div>
						<label>Lieu</label>
						<input type="text" name="lieu">
					</div>
					<div>
						<label>Date</label>
						<?php
						$date = date('Y-m-d');
						echo "<input type='date' name='jour' value='$date'>";
						?>
					</div>
				</div>
				<div id="etage2">
					<div>
						<label>Heure</label>
						<?php
						$heure = date('H:i');
						echo "<input type='time' name='heure' value='$heure'>";
						?>
					</div>
					<div>
						<label>Race</label>
						<select name="race">
							<option>Blanc de l'Allier</option>
							<option>Bourbourg</option>
							<option>Challans</option>
							<option>Cou nu</option>
							<option>Duclair</option>
							<option>Estaires</option>
							<option>Canard de Rouen</option>
							<option>Vouillé</option>
						</select>
					</div>
					<div>
						<label>Couleur</label>
						<select name="couleur">
							<option>Blanc</option>
							<option>Rouen clair</option>
							<option>Rouen foncé</option>
							<option>Noir</option>
						</select>
					</div>
				</div>
			</div>
			<div id="bouton">
				<form method="POST" action="affichage.php">
					<button name="accueil" id="accueil" value="Accueil">Accueil</button>
				</form>
				<button type="submit" name="ajouter" id="duck" value="Ajouter">Ajouter</button>
			</div>
		</form>
	</div>
</body>
</html>

<?php
if(!empty($_POST['accueil'])){
	header('Location: affichage.php');
}

if(!empty($_POST['ajouter'])){
	if (!empty($_POST['lieu']) && !empty($_POST['jour']) && !empty($_POST['race']) && !empty($_POST['couleur'])){
		$time = $_POST['jour'] . ' ' . $_POST['heure'];
		try {
			$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
			$bdd = new PDO('mysql:host=localhost;dbname=canardVolant;charset=utf8', 'x','x', $pdo_options);

			$req = $bdd->prepare('INSERT INTO infoCanard(lieu, jour, race, couleur)
				VALUES(:lieu, :jour, :race, :couleur)');
			$req->execute(array(
				':lieu' => $_POST['lieu'],
				':jour' => $time,
				':race' => $_POST['race'],
				':couleur' => $_POST['couleur']
			));
			header('Location: affichage.php');
		}
		catch (PDOException $e) {
			print "Erreur !: " . $e->getMessage() . "<br/>";
			die();
		}
	}else{
		echo  "Veuillez remplir tout les champs."; 
	}
}
?>
