<?php 
//date_default_timezone_set('America/Fortaleza');
$conn = new PDO("sqlite:../bd");
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

$nome = $_GET["nome"];
$valor = $_GET["valor"];
$qtd = $_GET["quantidade"];

$sql = $conn->prepare("INSERT INTO compras (nome, valor_uni, qntdAdquirida)
VALUES (:nome, :valor, :qtd)");

$sql->bindParam(":nome", $nome);
$sql->bindParam(":valor", $valor);
$sql->bindParam(":qtd", $qtd);

$sql->execute();

header("Location:../index.php");