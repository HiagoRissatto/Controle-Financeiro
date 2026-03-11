<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    <title>Funcionários</title>
</head>

<body>
    <?php include 'partials/header.php'; ?>
    <h1 class="text-center">Lista de Funcionários</h1>
    <?php
    require_once 'classes/Cadastro.php';
    $cadastro = new Cadastro();
    $funcionarios = $cadastro->listarFuncionarios();
    ?>
            <div class="container">
                <table class="table table-dark" border="1">
                    <tr >
                        <th class="col-md-4 text-center">Nome</th>
                        <th class="col-md-4 text-center">Email</th>
                        <th class="col-md-4 text-center">Cargo</th>
                    </tr>
                    <?php foreach ($funcionarios as $funcionario): ?>
                    <tr>
                        <td class="col-md-4 text-center"><?= $funcionario['nome'] ?></td>
                        <td class="col-md-4 text-center"><?= $funcionario['email'] ?></td>
                        <td class="col-md-4 text-center"><?= $funcionario['cargo'] ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        
    <?php include 'partials/footer.php'; ?>
</body>

</html>