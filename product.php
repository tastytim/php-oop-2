<?php 

include __DIR__ . "/data.php";

class Product{
     protected $product=[];

     function __construct($_product){
          $this->product = $_product;
     }

     function getProduct(){
          return $this->product;
     }

     function setProduct($_product){
        $this->product = $_product;
     }







     




}

?>