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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    
<h2>Add Item</h2>

<?php if (isset($error)): ?>
    <p style="color: red; background: #ffe6e6; padding: 10px;">
        <?= $error ?>
    </p>
<?php endif; ?>

<form method="POST">
    <input type="text" name="name" placeholder="Item Name" required>
    <br><br>

    <input type="number" name="quantity" placeholder="Quantity" required>
    <br><br>

    <input type="number" step="0.01" name="price" placeholder="Price" required>
    <br><br>

    <button type="submit" name="submit">Add Item</button>
    <button type="button" onclick="window.location.href='http://localhost/inventory-system/'"> Go Back </button>
</form>
    
</body>
</html>