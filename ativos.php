<?php
require_once 'classes/Ativo.php';

$ativo = new Ativo();
$relatorio = $ativo->calcularPrecoMedio();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Ativos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include 'partials/header.php'; ?>
    <h1 class="text-center ">Relatório de Ativos</h1>
    <table class="table table-striped" border="1">
        <tr>
            <th scope="col">Ativo</th>
            <th scope="col">Total Comprado</th>
            <th scope="col">Preço Médio</th>
        </tr>
        <?php foreach ($relatorio as $linha): ?>
        <tr class="table-row">
            <td><?= $linha['ativo'] ?></td>
            <td><?= $linha['total_quantidade'] ?></td>
            <td><?= number_format($linha['preco_medio'], 2, ',', '.') ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php include 'partials/footer.php'; ?>
</body>

</html>