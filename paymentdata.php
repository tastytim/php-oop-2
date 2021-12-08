<?php 

class PaymentData{
    protected $paypal;
    protected $creditcard;

    function __construct($_paypal, $_creditcard)
    {
        $this->paypal= $_paypal;
        $this->creditcard=$_creditcard;
    }

    function getPaypal(){
        return $this->paypal;
    }

    function getCreditCard(){
        return $this->creditcard;
    }

    function addCardCredit($_creditcard){
        $this->creditcard = $_creditcard;
    }

    function addPaypal($_paypal){
        $this->paypal = $_paypal;
    }

    function __toString()
    {
        return "{$this->paypal} {$this->creditcard}";
    }

    




}

?>