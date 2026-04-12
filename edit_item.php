<?php
include "controllers/ItemController.php";

$controller = new ItemController();

$id = $_GET['id'];
$item = $controller->show($id);

$result = $controller->update($id, $_POST);

if ($result === true) {
    header("Location: index.php?message=Item updated successfully");
    exit();
} else {
    $error = $result;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    
    <h2>Edit Item</h2>

<form method="POST">
    <input type="text" name="name" value="<?= $item['name'] ?>" required>
    <br><br>

    <input type="number" name="quantity" value="<?= $item['quantity'] ?>" required>
    <br><br>

    <input type="number" step="0.01" name="price" value="<?= $item['price'] ?>" required>
    <br><br>

    <button type="submit" name="update">Update Item</button>
    <button type="button" onclick="window.location.href='http://localhost/inventory-system/'"> Go Back </button>
</form>

</body>
</html>