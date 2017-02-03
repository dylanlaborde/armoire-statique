<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
	<meta charset="UTF-8">
	<title>Detail</title>
</head>
<body>
		
	<div class="ui grid">
	<div class="six wide column"></div>
<h1>Detail </h1>
</div>
<a href="/index.php">return to Home</a>
	<div class="ui grid">
		<div class="four wide column"></div>
		
		<table class="ui collapsing striped table">
			<thead>
			</pre>
			<tr>
				<th>Id </th>
				<th>Pointure </th>
				<th>temp_lavage</th>		
				<th>description</th>		
				<th>couleur </th>		
				<th>date_lavage</th>	
			</tr>		
		</thead>
		<tbody>
			<?php foreach ($socksID as $socksIDs): ?>
				<tr>
					<td>
						<?= $socksIDs->id?></a>
					</td>
					<td><?= $socksIDs->pointure?></td>
					<td><?= $socksIDs->temp_lavage?></td>
					<td><?= $socksIDs->description?></td>
					<td><?= $socksIDs->couleur?></td>
					<td><?= $socksIDs->date_lavage?></td>
				</tr>

			<?php endforeach ?>
		</tbody>
	</table>
</div>

</body>
</html>