<?php
include "controllers/ItemController.php";

$controller = new ItemController();

if (isset($_POST['submit'])) {
    if ($controller->store($_POST)) {
        header("Location: index.php?message=Item added successfully");
        exit();
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