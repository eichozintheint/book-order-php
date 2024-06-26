<?php
include_once './includes/db.php';

class Order{
    private $con,$statement;

    public function addOrder($user_id,$township_id,$receiver_name,$receiver_phone,$receiver_address,$payment_typeId,$totalPrice,$totalQty,$total){
        $this->con=Database::connect();
        $sql='INSERT INTO orders(user_id,township_id,receiver_name,receiver_phone,receiver_address,payment_type_id,total_price,total_qty,total) VALUES (:user_id,:township_id,:receiver_name,:receiver_phone,:receiver_address,:payment_type_id,:total_price,:total_qty,:total)';
        $this->statement=$this->con->prepare($sql);
        $this->statement->bindParam(':user_id',$user_id);
        $this->statement->bindParam(':township_id',$township_id);
        $this->statement->bindParam(':receiver_name',$receiver_name);
        $this->statement->bindParam(':receiver_phone',$receiver_phone);
        $this->statement->bindParam(':receiver_address',$receiver_address);
        $this->statement->bindParam(':payment_type_id',$payment_typeId);
        $this->statement->bindParam(':total_price',$totalPrice);
        $this->statement->bindParam(':total_qty',$totalQty);
        $this->statement->bindParam(':total',$total);
        return $this->statement->execute();
    }

    public function getLastInsertedId(){
        $this->con=Database::connect();
        return $this->con->lastInsertId();
    }
}
?>