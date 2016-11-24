<?php

	require_once 'inc/dbConnection.php';
	require_once 'inc/functions.php';

	$articles = lastArticle();

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
</body>
</html>