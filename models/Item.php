<?php

class Item {

    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        $sql = "SELECT * FROM items ORDER BY id DESC";
        return $this->conn->query($sql);
    }

    public function getById($id) {
        $sql = "SELECT * FROM items WHERE id = $id";
        return $this->conn->query($sql);
    }

    public function create($name, $quantity, $price) {
        $sql = "INSERT INTO items (name, quantity, price)
                VALUES ('$name', '$quantity', '$price')";
        return $this->conn->query($sql);
    }

    public function update($id, $name, $quantity, $price) {
        $sql = "UPDATE items 
                SET name='$name', quantity='$quantity', price='$price' 
                WHERE id=$id";
        return $this->conn->query($sql);
    }

    public function delete($id) {
        $sql = "DELETE FROM items WHERE id = $id";
        return $this->conn->query($sql);
    }
}