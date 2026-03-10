<?php
    require_once 'classes/Cadastro.php';
    $cadastro = new Cadastro();
?>
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $cadastro->adicionarFuncionario($_POST['nome'], $_POST['email'], $_POST['idade'], $_POST['cargo'], $_POST['salario'], $_POST['senha']);
        echo "Funcionário cadastrado com sucesso!";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Funcionário</title>
</head>
<body>
    <?php include 'partials/header.php'; ?>
    <form method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required>

        <label for="cargo">Cargo:</label>
        <input type="text" id="cargo" name="cargo" required>

        <label for="salario">Salário:</label>
        <input type="number" id="salario" name="salario" step="0.01" required>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>

        <button type="submit">Cadastrar</button>
    </form>
    <?php include 'partials/footer.php'; ?>
</body>
</html>