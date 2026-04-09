<?php
include "controllers/ItemController.php";

$controller = new ItemController();

$id = $_GET['id'];
$item = $controller->show($id);

if (isset($_POST['update'])) {
    if ($controller->update($id, $_POST)) {
        header("Location: index.php?message=Item updated successfully");
        exit();
    }
}
?>

<h2>Edit Item</h2>

<form method="POST">
    <input type="text" name="name" value="<?= $item['name'] ?>" required>
    <br><br>

    <input type="number" name="quantity" value="<?= $item['quantity'] ?>" required>
    <br><br>

    <input type="number" step="0.01" name="price" value="<?= $item['price'] ?>" required>
    <br><br>

    <button type="submit" name="update">Update Item</button>
</form>