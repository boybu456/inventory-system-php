<?php
include "config/database.php";
include "models/Item.php";

$itemModel = new Item($conn);

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    if ($itemModel->create($name, $quantity, $price)) {
        echo "Item added successfully!";
    } else {
        echo "Error adding item";
    }
}
?>

<h2>Add Item</h2>

<form method="POST">
    <input type="text" name="name" placeholder="Item Name" required>
    <br><br>

    <input type="number" name="quantity" placeholder="Quantity" required>
    <br><br>

    <input type="number" step="0.01" name="price" placeholder="Price" required>
    <br><br>

    <button type="submit" name="submit">Add Item</button>
</form>