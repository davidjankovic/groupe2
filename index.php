
<?php

	require_once 'inc/dbConnection.php';
	require_once 'inc/functions.php';
	require 'vendor/autoload.php';

	$articles = lastArticle();



if(isset($_POST['add'])) {
	phpMailer();
}


?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Articles</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php foreach ($articles as $key => $article): ?>
		<h1><?= $article['name'] ?></h1>

		<p>
			<?= $article['description'] ?>
		</p><br>
	<?php endforeach ?>


	<h1>Formulaire de contact</h1>

	<form action="#" method="post">
		<label for="lastname">Nom</label>
		<input type="text" name="lastname">
		<br><br>

		<label for="firstname">Prénom</label>
		<input type="text" name="firstname">
		<br><br>


		<label for="email">email</label>
		<input type="text" name="email">
		<br><br>


		<button name="add" type="submit">Envoyer</button>
	</form>

</body>
</html>