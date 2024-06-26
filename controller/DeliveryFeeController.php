<?php
include_once './model/DeliveryFee.php';

class DeliveryFeeController{
    private $deliveryFee;

    public function __construct(){
        $this->deliveryFee=new DeliveryFee();
    }

    public function getDeliveryFees(){
        return $this->deliveryFee->getDeliveryFees();
    }
}
?>