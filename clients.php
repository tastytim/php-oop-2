<?php


require_once __DIR__ . "/utilities.php";
require_once __DIR__ . "/data.php";



class Clients{
use Utilities;

protected $clientsList=[];

function __construct($_clients){
    $this->setClients($_clients);
}


function getClients(){
    return $this->clientsList;
}

function setClients($_clients){
    $this->clientsList = $_clients;
}








}


?>