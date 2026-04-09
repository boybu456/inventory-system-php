<?php
include "config/database.php";
include "models/Item.php";

class ItemController {

    private $itemModel;

    public function __construct() {
        global $conn;
        $this->itemModel = new Item($conn);
    }

    public function index() {
        return $this->itemModel->getAll();
    }

    public function store($data) {
        return $this->itemModel->create(
            $data['name'],
            $data['quantity'],
            $data['price']
        );
    }

    public function show($id) {
        $result = $this->itemModel->getById($id);
        return $result->fetch_assoc();
    }

    public function update($id, $data) {
        return $this->itemModel->update(
            $id,
            $data['name'],
            $data['quantity'],
            $data['price']
        );
    }

    public function destroy($id) {
        return $this->itemModel->delete($id);
    }
    
}