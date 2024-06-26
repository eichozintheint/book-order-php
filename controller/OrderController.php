<?php
include_once './model/Order.php';

class OrderController{
    private $order;

    public function __construct(){
        $this->order=new Order();
    }

    public function addOrder($user_id,$township_id,$receiver_name,$receiver_phone,$receiver_address,$payment_typeId,$totalPrice,$totalQty,$total){
        return $this->order->addOrder($user_id,$township_id,$receiver_name,$receiver_phone,$receiver_address,$payment_typeId,$totalPrice,$totalQty,$total);
    }

    public function getLastInsertedId(){
        return $this->order->getLastInsertedId();
    }
}
?>