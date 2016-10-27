<?php

	/*Esse é o código correto. Ele usa um parâmetro restrito em uma
	 instrução PDO. Assim a entrada externa do ID é escapada antes de ser 
	 introduzida no banco de dados, prevenindo contra potenciais ataques de 
	 SQL injection.*/

	// PDO + MySQL
	$pdo = new PDO('mysql:host=localhost;dbname=example', 'root', '');
	$stmt = $pdo->prepare('SELECT * FROM example WHERE name = :name');
	$stmt->bindParam(':name', $_GET['name'], PDO::PARAM_INT); //<-- Higienizado automaticamente pela PDO
	$stmt->execute();

	//mais em: http://www.devmedia.com.br/evitando-sql-injection-em-aplicacoes-php/27804