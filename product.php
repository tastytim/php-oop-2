<?php 

include __DIR__ . "/data.php";

class Product{
     protected $products=[];

     function __construct($_products){
          $this->products = $_products;
     }

     function getProducts(){
          return $this->products;
     }

     function getProductsForId($_id){
          return $this->products[$_id];
     }

     function setProducts($_products){
        $this->products = $_products;
     }

     function addNewProducts($_array){
          foreach($_array as $key=>$value){
               array_push($this->products , $value);
          }
     }

     function __toString()
     {
          $stringToReturn ="";
          foreach($this->products as $key=>$value){
              $stringToReturn.=implode($value) .  "</br>" ;
          }
          return $stringToReturn;
     }


}

?>