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
        return $this->transactionModel->create(
            $data['item_name'],
            $data['type'],
            $data['quantity']
        );
    }

}


