<?php


include __DIR__ . "/utilities.php";
include __DIR__ . "/data.php";



class Clients{

protected $clientsList = [];

use Utilities;

function __construct($_clientsList){
    $this->clientsList=$_clientsList;
}


public function getClients(){
    return $this->clientsList;
}

function setClients($_clientsList){
    $this->clientsList = $_clientsList;
}


function addNewClients($arrayFrom ){
    try{
        foreach($arrayFrom as $key=>$value){
            array_push($this->clientsList, new ClientPrime($value['id'],
            $this->upperCase($value['name']),
            $this->upperCase($value['surname']),
            $this->upperCase($value['adress']),
             $value['cart'],
             $value['paymentdata'],
             $value['prime'],
             $value['discount']));
        }
    }
    catch(Exception $e){
        echo $e->getMessage();
    }
}



}
?>