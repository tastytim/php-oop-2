<?php 

include __DIR__ . "/payment.php";

class Client extends PaymentData {
     protected $name = "";
     protected $surname = "";
     protected $adress = "";
     protected $cart = [];
     protected $paymentData = [];




    function __construct($_name, $_surname, $_adress, $_cart, $_paymentData){
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

}


?>