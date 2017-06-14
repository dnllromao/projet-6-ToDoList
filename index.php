<?php
	require('contenu.php');
	require('formulaire.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>ToDoList</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>To Do List</h1>
	<form action="" method="post" id="items-list">
		<h2>A faire</h2>
		<div class="block-afaire">
		<?php
			foreach ($afaire as $key => $value) { 
				echo '<label draggable="true"><input type="checkbox" name="'.$key.'" value="0">'.$value['name'].'</br></label>';
			}
		?>
		</div>
		<!--<input type="submit" value="enregistrer" name="action">-->
		<h2>Archive</h2>
		<div class="block-archive">
		<?php
			foreach ($archive as $key => $value) { 
				echo '<label class="done"><input type="checkbox" name="'.$key.'" value="1" checked>'.$value['name'].'</br></label>';
			}
		?>
		</div>
	</form>
	<h3>Ajouter une tâche</h3>
	<form action="" method="post">
		<label>
			La tâche à efectuer
			<input type="text" name="item">
			<input type="submit" value="ajouter" name="action">
		</label>
	</form>
	<script src="app.js"></script>
	<script src="drag.js"></script>
</body>
</html>