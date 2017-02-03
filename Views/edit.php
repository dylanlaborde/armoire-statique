<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
	<meta charset="UTF-8">
	<title>Edition</title>
</head>
<body>
	<h1>Editer votre article</h1>
<a href="index.php?id=<?= $key->id?>" class="ui button">Retour</a>
	<form action="" method="post" class="ui form">
		<input type="hidden" name="id" value="<?= $key->id?>">
		<div class="field">
			<label for="description">Description</label>
			<input id="description" type="text" name="description" value="<?= $key->description?>">
		</div>
		<div class="field">
			<label for="couleur">Couleur</label>
			<input type="text" name="couleur" id="couleur"  value="<?= $key->couleur?>">
		</div>
		<div class="field">
			<label for="pointure">Pointure</label>
			<input type="text" name="pointure" id="pointure"  value="<?= $key->pointure?>">
		</div>
		<div class="field">
			<label for="temp_lavage">Temperature de Lavage</label>
			<input type="text" name="temp_lavage" id="temp_lavage"  value="<?= $key->temp_lavage?>">
		</div>
		<div>
			<button class="positive ui button">Valider les modification</button>
		</div>
	</form>
</body>
</html>