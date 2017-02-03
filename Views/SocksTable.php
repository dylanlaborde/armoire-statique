<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<div class="ui grid">
	<div class="six wide column"></div>
<h1>Mes chaussettes </h1>
</div>
	<div class="ui grid">
	<div class="four wide column"></div>
		
			<table class="ui collapsing striped table">
				<thead>
				
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
				<?php foreach ($armoire as $armoires): ?>
					<tr>
						<td>
							<a href="?id=<?= $armoires->id?>"><?= $armoires->id?></a>
						</td>
						<td><?= $armoires->pointure?></td>
						<td><?= $armoires->temp_lavage?></td>
						<td><?= $armoires->description?></td>
						<td><?= $armoires->couleur?></td>
						<td><?= $armoires->date_lavage?></td>
					</tr>

				<?php endforeach ?>
			</tbody>
		</table>

</div>


</body>
</html>