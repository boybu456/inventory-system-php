<?php
include "controllers/ItemController.php";

$controller = new ItemController();
$result = $controller->index();

?>


<h2>Inventory List</h2>

<?php if (isset($_GET['message'])): ?>
    <p style="color: green;">
        <?= $_GET['message'] ?>
    </p>
<?php endif; ?>

<a href="add_item.php">Add New Item</a>

<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Actions</th>
    </tr>

    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['name'] ?></td>
        <td><?= $row['quantity'] ?></td>
        <td><?= $row['price'] ?></td>
        <td>
            <a href="edit_item.php?id=<?= $row['id'] ?>">Edit</a> |
            <a href="delete_item.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>

</table>