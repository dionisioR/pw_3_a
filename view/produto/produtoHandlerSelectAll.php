<?php 

require_once('../../config/db.php');
require_once('../../model/Produto.php');

// conexão com o bd
$database = new Database();
$db = $database->getConnection();

// instância do objeto Produto
$produto = new Produto($db);
$stmt = $produto->readAll();

// contar nº de registros
$num = $stmt->rowCount();