<?php
include_once './includes/db.php';

class OrderDetail{
    private $con,$statement;

    public function addOrderDetail($order_id,$book_id,$book_qty){
        $this->con=Database::connect();
        $sql="INSERT INTO order_detail (order_id,book_id,qty) VALUES(:order_id,:book_id,:book_qty)";
        $this->statement=$this->con->prepare($sql);
        $this->statement->bindParam(':order_id',$order_id);
        $this->statement->bindParam(':book_id',$book_id);
        $this->statement->bindParam(':book_qty',$book_qty);
        return $this->statement->execute();
    }
}

?>