<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulaire de saisi d'avis</title>
	<link rel="stylesheet" href="boris.css">
	<link rel="stylesheet" href="boris-layout.css">
</head>

<body>

	<div class="container">

		<form method="POST" action="traite.php" class="form" enctype="multipart/form-data">


			<div class="form-group around">

				<h1 class="form-title">Formulaire de registre de fichier en <u>LOCAL</u></h1>

				<h2>Choisissez votre fichier IMAGE SVP</h2>
				<h3>Les autres formats seront pas pris en compte car je n'ai pas inclus la balise qui permet de les lire sur la page</h3>



				<div class="form-controle">
					<label for="fichierChoix"></label>
					<!-- POUR CONDITIONNER LES FICHIER A TELECHARER AJOUTER : accept=".jpg,.img" -->
					<input type="file" name="fichier" id="fichierChoix"  required>
				</div>

				<!-- SAISI DES BOUTONS DE SAISI -->
				<div class="btn-group center-block">

					<input type="submit" name="" value="Charger l'image" class="btn btn-succes">

					<input type="reset" name="" value="Anuler" class="btn btn-erreur">

				</div>

			</div>
		</form>

		<hr>
		<br>
		<div class="form-group around">

			<h1 class="form-title">LES <u>IMAGES</u> DANS LE FICHIER LOCAL : <u>FICHIERS</u></h1>

			<!-- GRILLE pour ranger les cartes : ROW / GRID -->
			<div class="grid">
				<!-- Lister toutes les images dans le fichier : FICHIERS -->
				<?php
				$liste = scandir("FICHIERS");
				// var_dump($liste);
				for ($i = 2; $i < count($liste); $i++) :
				?>
					<div class="card">
						<div class="card-body center-block">
							<img width="236px" src="FICHIERS/<?= $liste[$i] ?>" alt="Image dans le local : FICHIERS">
						</div>
						<div class="card-footer btn-group center-block">
							<a download="<?= $liste[$i] ?>" href="FICHIERS/<?= $liste[$i] ?>" class="btn btn-succes">Telecharger</a>
						</div>
					</div>
				<?php endfor; ?>
			</div>

			<!-- Fin GRILLE  -->
		</div>
	</div>

	<script src="boris.js"></script>
</body>

</html>