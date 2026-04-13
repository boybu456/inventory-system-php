<?php
require_once "config/database.php";
require_once "controllers/TransactionController.php";

$controller = new TransactionController();
$transactions = $controller->index();
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
    
    <h2>Transaction History</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>Item</th>
        <th>Type</th>
        <th>Quantity</th>
        <th>Date</th>
    </tr>

    <?php while ($row = $transactions->fetch_assoc()): ?>
        <tr>
            <td><?= $row['item_name'] ?></td>
            <td><?= strtoupper($row['type']) ?></td>
            <td><?= $row['quantity'] ?></td>
            <td><?= $row['created_at'] ?></td>
        </tr>
    <?php endwhile; ?>

</table>
<button type="button" onclick="window.location.href='http://localhost/inventory-system/'"> Go Back </button>

</body>
</html>