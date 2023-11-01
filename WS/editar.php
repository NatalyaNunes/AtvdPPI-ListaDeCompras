<?php 
$conn = new PDO("sqlite:../bd");
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

$idEditar = $_GET["id"];
$nome = $_GET["nome"];
$valorUni = $_GET["valor"];
$quantidade = $_GET["quantidade"];

$preparo = $conn->prepare("UPDATE compras
SET nome=:nome, valor_uni=:valorUni, qntdAdquirida=:qntd
WHERE id=:id;");

$preparo->bindParam(":id", $idEditar);
$preparo->bindParam(":nome", $nome);
$preparo->bindParam(":valorUni", $valorUni);
$preparo->bindParam(":qntd", $quantidade);

$preparo->execute();

header("Location:../index.php");