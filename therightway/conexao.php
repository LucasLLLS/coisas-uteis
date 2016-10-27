<?php
class Conexao {
    var $pdo;
    
    function __construct() {
        $this->pdo = new PDO('mysql:host=localhost;dbname=devmedia', 'root', '');
    }

    public function select($nome, $senha) {        
        $stmt = $this->pdo->prepare("select * from devmedia where nome = '$nome' and senha = '$senha'");
        $run = $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}