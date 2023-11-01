<?php 
$conn = new PDO("sqlite:../bd");
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

$idDelete = $_GET["id"];

$preparo = $conn->prepare("DELETE FROM compras WHERE id=:id;");
$preparo->bindParam(":id", $idDelete);
$preparo->execute();

header("Location:../index.php");