<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once "config/database.php";
require_once "models/Item.php";
require_once "controllers/TransactionController.php";

$itemModel = new Item($conn);
$items = $itemModel->getAll();
$controller = new TransactionController();

if (isset($_POST['submit'])) {

    $result = $controller->store($_POST);

    if ($result) {
        $message = "Transaction successful!";
    } else {
        $error = "Transaction failed!";
    }
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
    
    <?php if (isset($message)): ?>
        <p style="color: green;"><?= $message ?></p>
    <?php endif; ?>

    <?php if (isset($error)): ?>
        <p style="color: red;"><?= $error ?></p>
    <?php endif; ?>

    <form method="POST">

    <label>Item:</label>
    <select name="item_id">
    <?php while ($row = $items->fetch_assoc()): ?>
        <option value="<?= $row['id'] ?>">
            <?= $row['name'] ?>
        </option>
    <?php endwhile; ?>
</select>

    <br><br>

    <label>Type:</label>
    <select name="type">
        <option value="in">IN</option>
        <option value="out">OUT</option>
    </select>

    <br><br>

    <label>Quantity:</label>
    <input type="number" name="quantity" required>

    <br><br>

    <button type="submit" name="submit">Submit</button>

</form>

</body>
</html>