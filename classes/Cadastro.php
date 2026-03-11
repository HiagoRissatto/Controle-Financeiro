<?php
require_once 'Database.php';

class Cadastro {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function adicionarFuncionario($nome, $email, $idade, $cargo, $salario) {
        $sql = "INSERT INTO funcionarios (nome, email, idade, cargo, salario) VALUES (:nome, :email, :idade, :cargo, :salario)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            'nome' => $nome,
            'email' => $email,
            'idade' => $idade,
            'cargo' => $cargo,
            'salario' => $salario,
            
        ]);
    }

    public function listarFuncionarios() {
        $sql = "SELECT * FROM funcionarios";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}