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
        <h1> CADASTRO DE COMPRAS</h1>
        <ul>
            <li><a href="index.php">HOME<a></li>       
        </ul>
    </nav>
    <main>
        <form action="WS/salvar.php" method="get" class="container">
            <div class="form-group"><label for="txtNome">Nome</label>
            <input type="text" name="nome" id="txtNome" class="form-control"></div>
            
            <div class="form-group"><label for="numValor">Valor unitário do item</label>
            <input type="number " step="0.01" name="valor" id="numValor" class="form-control"></div>
        
            <div class="form-group"><label for="numQtd">Quantidade do item</label>
            <input type="number" name="quantidade" id="numQtd" class="form-control"></div>
        
            <input type="submit" value="Crie" class="btn btn-primary">
        </form>
</main>
</body>
</html>