<?php

class Transaction {

    private $conn;

    public function __construct($db){
        $this->conn = $db;
    }

    public function create($item_id, $type, $quantity){
        
        if ($quantity <= 0) {
            return false;
        }
        
        $stmt = $this->conn->prepare("INSERT INTO transactions (`item_id`, `type`, `quantity`) VALUES (?, ?, ?)");

        $stmt->bind_param("isi", $item_id, $type, $quantity);

        return $stmt->execute();
    }

    public function getAll(){
        $sql = "SELECT t.*, i.name AS item_name
                FROM transactions t
                JOIN items i ON t.item_id = i.id
                ORDER BY t.created_at DESC";

        return $this->conn->query($sql);
    }

    
}