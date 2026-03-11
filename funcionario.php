<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Funcionários</title>
</head>
<body>
    <?php include 'partials/header.php'; ?>
    <h1>Lista de Funcionários</h1>
    <?php
    require_once 'classes/Cadastro.php';
    $cadastro = new Cadastro();
    $funcionarios = $cadastro->listarFuncionarios();
    ?>
    <div class="container">
        <div class="tabela">
            <table  border="2">
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Cargo</th>
                </tr>
        
            <?php foreach ($funcionarios as $funcionario): ?>
                <tr>
                    <td><?= $funcionario['nome'] ?></td>
                    <td><?= $funcionario['email'] ?></td>
                    <td><?= $funcionario['cargo'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        </div>
    </div>
    <?php include 'partials/footer.php'; ?>
</body>
</html>