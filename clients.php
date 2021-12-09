<?php


require_once __DIR__ . "/utilities.php";
require_once __DIR__ . "/data.php";



class Clients{
use Utilities;

protected $clientsList;

function __construct($_clientsList=[]){
    $this->clientsList=$_clientsList;
}


function getClients(){
    return $this->clientsList;
}

function setClients($_clientsList){
    $this->clientsList = $_clientsList;
}


function printClients(){
    echo count($this->clientsList);
    foreach($this->clientsList as $key=>$value){
        echo $value;
    }
}








}


?>