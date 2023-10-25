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
</head>
<body>
<h1> LISTA DE COMPRAS</h1>
    <nav>
        <ul>
            <li><a href="index.php">HOME<a></li>
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
    </tr>
    <?php 
    $slq = $conn->query("select * FROM compras");
    $compras = $slq->fetchAll();

    foreach ($compras as $comp): {
    }
    ?>
<tr>
    <td><?= $comp->id ?></td>
    <td><?= $comp->nome ?></td>
    <td><?= $comp->valor_uni ?></td>
    <td><?= $comp->qntdAdquirida ?></td>
</tr>
    <?php endforeach; ?>

        </table>
    </main>
    
    <h1>

</body>
</html>