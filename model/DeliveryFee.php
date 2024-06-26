<?php
include_once './includes/db.php';

class DeliveryFee{
    private $con,$statement;

    public function getDeliveryFees(){
        $this->con=Database::connect();
        $sql='select * from delivery_fees';
        $this->statement=$this->con->prepare($sql);
        if($this->statement->execute()){
            $delivery_fees=$this->statement->fetchAll(PDO::FETCH_ASSOC);
            return $delivery_fees;
        }
    }
}
?>