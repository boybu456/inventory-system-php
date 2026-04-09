<?php
include "controllers/ItemController.php";

$controller = new ItemController();

$result = $controller->store($_POST);

if ($result === true) {
    header("Location: index.php?message=Item added successfully");
    exit();
} else {
    $error = $result;
}


?>

<h2>Add Item</h2>
<?php if (isset($error)): ?>
    <p style="color: red;"><?= $error ?></p>
<?php endif; ?>
<form method="POST">
    <input type="text" name="name" placeholder="Item Name" required>
    <br><br>

    <input type="number" name="quantity" placeholder="Quantity" required>
    <br><br>

    <input type="number" step="0.01" name="price" placeholder="Price" required>
    <br><br>

    <button type="submit" name="submit">Add Item</button>
</form>