

<?php

class PaymentData{
    protected $paypal="";
    protected $cardCredit="";


    function __construct($_paypal, $_cardCredit){
        $this->paypal = $_paypal;
        $this->cardCredit = $_cardCredit;
    }

    function getPaypal(){
        return $this->paypal;
    }
    function getCardCredit(){
        return $this->cardCredit;
    }

    function setPaypal($_paypal){
        $this->paypal = $_paypal;
    }

    function setCardCredit($_cardCredit){
        $this->cardCredit = $_cardCredit;
    }
}

?>