<?php
include "models/Item.php";

$itemModel = new Item($conn);

$itemModel->delete($id);

header("Location: index.php");
exit();