<?php

include __DIR__ . "/client.php";

  class ClientPrime extends Client{

      protected $prime;
      protected $discount;

      function __construct($_id, $_name, $_surname, $_adress, $_cart, $_paymentData ,$_prime=false, $_discount=0)
      {
          parent::__construct($this->id, $this->name, $this->surname, $this->adress,$this->cart,$this->paymentData);
          $this->id = $_id;
          $this->name = $_name;
          $this->surname = $_surname;
          $this->adress = $_adress;
          $this->cart = $_cart;
          $this->paymentData = $_paymentData;
          $this->prime = $_prime;
          $this->discount = $_discount;
      }

      function getPrime(){
          return $this->prime;
      }

      function getDiscount(){
          return $this->discount;
      }

      function setPrime($_prime){
          $this->prime = $_prime;
      }

      function setDiscount($_discount){
          $this->discount=$_discount;
      }

      


  }

  

?>