<?php 

include __DIR__ . "/payment.php";

class Client extends PaymentData {
    protected $id = 0;
     protected $name = "";
     protected $surname = "";
     protected $adress = "";
     protected $cart = [];
     protected $paymentData = [];




    function __construct($_id, $_name, $_surname, $_adress, $_cart, $_paymentData){
        $this->id = $_id;
        $this->name = $_name;
        $this->surname = $_surname;
        $this->adress = $_adress;
        $this->cart = $_cart;
        $this->paymentData = $_paymentData;
    }

// GETTER
    function getName(){
        return $this->name;
    }

    function getSurname(){
        return $this->surname;
    }

    function getAdress(){
        return $this->adress;
    }

    function getCart(){
        if(count($this->cart)===0){
            return "Cart empty";
        }
        return $this->cart;
    }

    function getPaymentData(){
       return $this->paymentData;
    }
// SETTER
    function setName($_name){
        $this->name = $_name;
    }
    function setSurname($_surname){
        $this->surname = $_surname;
    }
    function setAdress($_adress){
        $this->name = $_adress;
    }
    function setCart($_cart){
        $this->cart = $_cart;
    }
    function set($_paymentData){
        $this->paymentData = $_paymentData;
    }

    function insertPaymentDates($paypalMail , $cardCreditNumber){
        array_push($this->paymentData, new PaymentData($paypalMail, $cardCreditNumber));
    }

    function addProduct( $_newProduct){
        array_push($this->cart,  $_newProduct);
    }


    function removeProduct(int $id){
        if(!isset($this->cart[$id])){
            return;
        }
        unset($this->cart[$id]);
    }


}


?>