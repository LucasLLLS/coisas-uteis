<?php
	require 'conexao.php';
	$conn = new Conexao();
	if($_POST){    
	    $nome = $_POST['nome'];
	    $senha = $_POST['senha'];    
	    $select = $conn->select($nome, $senha);    
	    var_dump($select);    
	}