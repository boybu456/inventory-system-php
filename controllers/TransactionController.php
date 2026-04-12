<?php
require_once "config/database.php";
require_once "models/Transaction.php";
require_once "models/Item.php";


class TransactionController {

    private $transactionModel;
    private $itemModel;
    
    public function __construct(){
        global $conn;
        $this->transactionModel = new Transaction($conn);
        $this->itemModel = new Item($conn);
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

        //create transaction
        $created = $this->transactionModel->create($item_id, $type, $quantity);

        if (!$created) {
        return false;
        }

        //get prev item data
        $item = $this->itemModel->getById($item_id);
        $current = $item->fetch_assoc();

        if (!$current) {
        return false;
        }

        if ($type == 'in') {
            $newQuantity = $current['quantity'] + $quantity;
        } else {
            $newQuantity = $current['quantity'] - $quantity;
        }

        if ($newQuantity < 0) {
        return false;
        }

        return $this->itemModel->update(
            $item_id,
            $current['name'],
            $newQuantity,
            $current['price']
        );

    }

}


