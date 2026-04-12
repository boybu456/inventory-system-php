<?php
include "config/database.php";
include "models/Transaction.php";

class TransactionController {

    private $transactionModel;

    public function __construct(){
        global $conn;
        $this->transactionModel = new Transaction($conn);
    }

    public function index() {
        return $this->transactionModel->getAll();
    }

    public function store($data){
        
        $item_id = $data['item_id'];
        $type = $data['type'];
        $quantity = $data['quantity'];
        
        if($quantity <= 0){
            return false;
        }
        if($type != 'in' && $type != 'out'){
            return false;
        }

        return $this->transactionModel->create($item_id, $type, $quantity);

    }

}


