<?php 
$conn = new PDO("sqlite:bd");
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de compras</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <nav>
        <h1> LISTA DE COMPRAS </h1>
        <ul>
            <li><a href="index.php">HOME <a></li>
            <li><a href="form.php">ADICIONAR ITEM NA LISTA</a></li>
        </ul>
    </nav>
    <main>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Valor da unidade</th>
                <th>Quantidade de itens</th>
                <th>Valor parcial</th>
                <th>Editar <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-ccw"><polyline points="1 4 1 10 7 10"></polyline><polyline points="23 20 23 14 17 14"></polyline><path d="M20.49 9A9 9 0 0 0 5.64 5.64L1 10m22 4l-4.64 4.36A9 9 0 0 1 3.51 15"></path></svg></th>
                <th>Excluir <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-delete"><path d="M21 4H8l-7 8 7 8h13a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z"></path><line x1="18" y1="9" x2="12" y2="15"></line><line x1="12" y1="9" x2="18" y2="15"></line></svg></th>
            </tr>
    <?php 
    $slq = $conn->query("select * FROM compras");
    $compras = $slq->fetchAll();

    $soma = 0;

    foreach ($compras as $comp): {
    }
    ?>
            <tr>
                <td><?= $comp->id ?></td>
                <td><?= $comp->nome ?></td>
                <td><?= $comp->valor_uni ?></td>
                <td><?= $comp->qntdAdquirida ?></td>
                <td><?= $comp->valor_uni * $comp->qntdAdquirida?></td>
                <td><a href="form.php?id=<?= $comp->id ?>" class="edite but">Editar</a></td>
                <td><a href="WS/deletar.php?id=<?= $comp->id ?>"class="delete but">Deletar</a></td>
                <?php
                $soma = $soma + $comp->valor_uni * $comp->qntdAdquirida
                ?>
            </tr>
    <?php endforeach; ?>

        </table>
    </main>
    <footer>
        <h2 class="total bc-opaco txt-white"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
            Valor Total: <?= $soma ?></h2>
    </footer>

</body>
</html>