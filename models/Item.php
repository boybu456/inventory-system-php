<?php

class Item {

    private $conn;

    public function __construct($db){
        $this->conn = $db;
    }

    public function getAll(){
        $sql = "SELECT * FROM items ORDER BY id DESC";
        return $this->conn->query($sql);
    }

    public function getById($id){
        $stmt = $this->conn->prepare("SELECT * FROM items WHERE id=?");

        $stmt->bind_param("i", $id);
        $stmt->execute();

        return $stmt->get_result();
    }

    public function create($name, $quantity, $price){

        $stmt = $this->conn->prepare("INSERT INTO items (name, quantity, price) VALUES (?, ?, ?)");

        $stmt->bind_param("sii", $name, $quantity, $price);

        return $stmt->execute();
    }

    public function update($id, $name, $quantity, $price){

    $stmt = $this->conn->prepare("UPDATE items SET name=?, quantity=?, price=? WHERE id=?");

    $stmt->bind_param("siii", $name, $quantity, $price, $id);

    return $stmt->execute();
    }

    public function delete($id){
        $stmt = $this->conn->prepare("DELETE FROM items WHERE id = ?");

        $stmt->bind_param("i", $id);

        return $stmt->execute();
    }
}