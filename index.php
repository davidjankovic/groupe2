<?php  

require_once 'inc/functions.php';
require 'vendor/autoload.php';

if(isset($_POST['add'])) {
	phpMailer();
}

?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Formulaire de contact</title>
	<link rel="stylesheet" href="">
</head>
<body>
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