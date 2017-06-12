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
	<h2>A faire</h2>
	<form action="" method="post">
		<?php
			foreach ($afaire as $key => $value) { 
				echo '<label><input type="checkbox" name="'.$key.'">'.$value['name'].'</label></br>';
			}
		?>
		<input type="submit" value="enregistrer" name="action">
		<h2>Archive</h2>
		<?php
			foreach ($archive as $key => $value) { 
				echo '<label class="done"><input type="checkbox" name="'.$key.'" checked>'.$value['name'].'</label><br>';
			}
		?>
	</form>
	<h3>Ajouter une tâche</h3>
	<form action="" method="post">
		<label>
			La tâche à efectuer
			<input type="text" name="item">
			<input type="submit" value="ajouter" name="action">
		</label>
	</form>
</body>
</html>