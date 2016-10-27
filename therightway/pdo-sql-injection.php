<?php
	// PDO + MySQL

	if(isset($_POST['name'])){
		$pdo = new PDO('mysql:host=localhost;dbname=example', 'root', '');
		$pdo->query("SELECT * FROM example WHERE name = " . $_POST['name']);
		echo 'opa';
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<form action="" method="post" enctype="multipart/form-data">
		<input type="text" name="name"><br>
		<input type="submit" value="Logar">	
	</form>
	
</body>
</html>