<?php
require_once('../../config/db.php');
require_once('../../model/Produto.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $database = new Database();
    $db = $database->getConnection();

    $produto = new Produto($db);
    $produto->pro_id = $id;
    $produto->readOne();
}else{
    echo "Produto não encontrado!!!";
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Produto</h1>
</body>

</html>