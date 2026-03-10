<?php
require_once 'Database.php';

class Cadastro {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function adicionarFuncionario($nome, $email, $idade, $cargo, $salario, $senha) {
        $sql = "INSERT INTO usuarios (nome, email, idade, cargo, salario, senha) VALUES (:nome, :email, :idade, :cargo, :salario, :senha)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            'nome' => $nome,
            'email' => $email,
            'idade' => $idade,
            'cargo' => $cargo,
            'salario' => $salario,
            'senha' => password_hash($senha, PASSWORD_BCRYPT)
        ]);
    }

    public function listarFuncionarios() {
        $sql = "SELECT * FROM usuarios";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}