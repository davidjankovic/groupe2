<?php

	function lastArticle() {
		global $pdo;

		$sql= '

			SELECT *
			FROM products
			LIMIT 3

		';

		$result = $pdo->query($sql);

		return $result->fetchAll();
	}