<?php
	// PDO + MySQL
	$pdo = new PDO('mysql:host=localhost;dbname=example', 'root', '');
	$statement = $pdo->query("SELECT * FROM example");
	$row = $statement->fetch(PDO::FETCH_ASSOC);
	echo htmlentities($row['name']);