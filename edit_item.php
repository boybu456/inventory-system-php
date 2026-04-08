<?php
include "config/database.php";
include "models/Item.php";

$itemModel = new Item($conn);

// GET ID FROM URL
$id = $_GET['id'];

// FETCH ITEM DATA
$result = $itemModel->getById($id);
$item = $result->fetch_assoc();

// UPDATE ITEM
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    if ($itemModel->update($id, $name, $quantity, $price)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error updating item";
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