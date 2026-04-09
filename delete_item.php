<?php
include "controllers/ItemController.php";

$controller = new ItemController();

$id = $_GET['id'];
$controller->destroy($id);

header("Location: index.php?message=Item deleted successfully");
exit();
?>